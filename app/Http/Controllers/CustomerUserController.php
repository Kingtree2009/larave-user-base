<?php
/**
 * Created by PhpStorm.
 * User: kt
 * Date: 2018/6/30
 * Time: 下午3:54
 */

namespace App\Http\Controllers;


use App\Http\Services\Particle;
use App\Http\Services\Utills;
use App\Models\AnyunModels\ACustUser;
use App\Models\AnyunModels\AReceAddressModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;
use Validator;
use Webpatser\Uuid\Uuid;

class CustomerUserController extends Controller
{

    const sessionPre = 'cust_user:session:';
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'=>'required|email',//
            'region' => 'required',//
            'password'=>'required|string|min:6|max:20',
            'currency'=>'required'


        ]);

        if ($validator->fails()) {
            return $this->jsonResult(422,[],'email,region,password,currency are required');
        }

        $data = $request->all();

        $data['password'] = Hash::make($data['password']);
        $a = array(1,1,1,1,1);
        $userNo = Utills::quickRandom();
        $confilct = true;
        foreach ($a as $i)
        {

            $m = ACustUser::where('user_no',$userNo)->first();
            if(!$m)
            {
                $confilct = false;
                break;
            }
            $userNo = Utills::quickRandom();

        }
        if($confilct)
        {
            return $this->jsonResult(501,[],'user_no conflict please re-register');
        }
        $data['user_no'] = $userNo;

        $user = ACustUser::insert($data);
        return $this->jsonResult(0,$user);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'=>'required|email',
            'password'=>'required|string|min:6|max:20',


        ]);

        if ($validator->fails()) {
            return $this->jsonResult(422,[],'email,password are required');
        }


        $email = Input::get('email');
        $pwd = Input::get('password');

        $user = ACustUser::whereEmail($email)->first();
        $status = 'failed';
        if($user)
        {
            if (Hash::check($pwd, $user->password)) {
                $status = 'pass';
                $user->save();
                $value = $user->toJson();
                $token = Uuid::generate();
                $key = self::sessionPre.$token;
                $redis = Redis::connection();

                $expireSeconds = 60*60*24*10+10;
                $expireMinute = 60*24*10+1;
                $redis->set($key,$value,'EX',$expireSeconds);
                return $this->jsonResult(0,$status)
//                ->header('token',$key)
                    ->cookie('token',$key,$expireMinute);
            }
        }
        return $this->jsonResult(0,$status);
    }


    public function getInfo(Request $request)
    {
        $user = $request->user;

        return $this->jsonResult(0,$user);
    }
    public function customerUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id'=>'required',
        ]);

        if ($validator->fails()) {
            return $this->jsonResult(422,[],'id are required');
        }

        $data = $request->all();
        $id = $data['id'];

        unset($data['id']);
        $user = $request->user;
        $uid = $user['id'];
        if($uid == $id)
        {
            $status = ACustUser::whereId($id)->update($data);
            return $this->jsonResult(0,$status);
        }
        else
        {
            Log::info('user info error',['uid'=>$uid,'id'=>$id]);
            return $this->jsonResult(501,[],'user info is error');
        }


    }

    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required',

            'new_password'=>'required|string|min:6|max:20',
            'old_password'=>'required|string|min:6|max:20',
        ]);

        if ($validator->fails()) {
            return $this->jsonResult(422,[],'name,new_password are required');
        }

        $name = Input::get('name');
        $oPwd = Input::get('old_password');
        $nPwd = Input::get('new_password');

        $user = ACustUser::where('name',$name)
            ->first();
        if(!$user)
        {
            return $this->jsonResult(0,[],'user  is not exist');
        }
        if (!Hash::check($oPwd, $user->password)) {

            return $this->jsonResult(501,[],'the old password is wrong');
        }

        $user->password = Hash::make($nPwd);
        $user->save();

        $token = Cookie::get('token');
        $redis = Redis::connection();

        $status = $redis->del([$token]);
        return $this->jsonResult(0,$status);

    }

    public function addReceAddress(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'country'  => 'required',
            'state'    => 'required',
            'city'     => 'required',
            'county'   => 'required',
            'address'  => 'required',
            'postcode' => 'required',
            'name'     => 'required',
            'mobile'   => 'required',
            'IDNo'     => 'required',
        ]);

        if ($validator->fails()) {
            return $this->jsonResult(422, [], 'country,state,city,
             county,address,postcode,name,mobile,IDNo are required');
        }

        $id = Particle::generateParticle();
        $user = $request->user;

        $data = $request->all();
        $data['id'] = $id;
        $data['cust_id'] = $user['id'];

        AReceAddressModel::insert($data);
        return $this->jsonResult(0,['address_id'=>$id]);
    }

    public function deleteAddress($id)
    {

        $num = AReceAddressModel::destroy($id);

        return $this->jsonResult(0,$num);
    }

    public function setDefaultAddress(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'address_id'  => 'required',

        ]);

        if ($validator->fails()) {
            return $this->jsonResult(422, [], 'address_id is required');
        }

        $addressId = Input::get('address_id');
        $user = $request->user();
        $uid = $user['id'];

        DB::transaction(function () use ($addressId,$uid){

            AReceAddressModel::whereId($addressId)->update(['is_default','yes']);
            AReceAddressModel::whereCustId($uid)->where('id','<>',$addressId)
                ->update(['is_default','no']);
        }, 3);

        return $this->jsonResult(0);
    }

    public function updateAddress(Request $request,$id)
    {
        $data = $request->all();
        $user = $request->user;
        $uid = $user['id'];

        $num = AReceAddressModel::whereId($id)->where('cust_id',$uid)
            ->update($data);

        return $this->jsonResult(0,$num);
    }

    public function getAddress($id)
    {
        $address = AReceAddressModel::find($id)->toArray();
        return $this->jsonResult(0,$address);
    }

    public function getAddressList(Request $request)
    {
        $user = $request->user;
        $uid = $user['id'];
        $list = AReceAddressModel::whereCustId($uid)->get()->toArray();

        return $this->jsonResult(0,$list);
    }


}