<?php
/**
 * Created by PhpStorm.
 * User: kt
 * Date: 2018/7/2
 * Time: 下午2:05
 */

namespace App\Http\Controllers;


use App\Models\AnyunModels\AManageUserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redis;
use Validator;
use Webpatser\Uuid\Uuid;

class ManageController extends Controller
{
    const sessionPre = 'manager:session:';
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'password'=>'required|string|min:6|max:20',
        ]);

        if ($validator->fails()) {
            return $this->jsonResult(422,[],'name,password are required');
        }


        $name = Input::get('name');
        $pwd = Input::get('password');
        $user = AManageUserModel::where('name',$name)
            ->first();

        $status = 'failed';
        if($user)
        {
            if($user->is_disable == 'yes')
            {
                return $this->jsonResult(501,[],'user status is disabled');
            }
            $hashCheck = Hash::check($pwd, $user->password);

            if ($hashCheck) {
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

    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required',

            'new_password'=>'required|string|min:6|max:20',
        ]);

        if ($validator->fails()) {
            return $this->jsonResult(422,[],'name,new_password are required');
        }

        $name = Input::get('name');

        $nPwd = Input::get('new_password');

        $user = AManageUserModel::where('name',$name)
            ->first();
        if(!$user)
        {
            return $this->jsonResult(0,[],'user  is not exist');
        }

        $user->password = Hash::make($nPwd);
        $user->save();

        $token = Cookie::get('token');
        $redis = Redis::connection();

        $status = $redis->del([$token]);
        return $this->jsonResult(0,$status);

    }

    public function createManager(Request $request)
    {
        $user = $request->user;
        if($user['name']!= 'admin')
        {
            return $this->jsonResult(501,[],'You are unauthorized');
        }

        $validator = Validator::make($request->all(), [
            'name'=>'required',//
            'password'=>'required|string|min:6|max:20',
            'user_mail'=>'required|string|email|max:60',

        ]);

        if ($validator->fails()) {
            return $this->jsonResult(422,[],'name,password are required');
        }

        $data = $request->all();
        $user = AManageUserModel::where('name',$data['name'])
            ->orWhere('user_mail',$data['user_mail'])
            ->first();
        if($user)
        {
            return $this->jsonResult(501,[],'This user name or mail have existed');
        }

        $data['password'] = Hash::make($data['password']);
        $user = AManageUserModel::insert($data);
        return $this->jsonResult(0,$user);

    }

    public function updateOperator(Request $request,$id)
    {
        $user = $request->user;
        if($user['name']!= 'admin')
        {
            return $this->jsonResult(501,[],'You are unauthorized');
        }
        $password = Input::get('password')??false;
        $isDisable = Input::get('isDisable')??false;

        $user = AManageUserModel::where('id',$id)->first();
        if($user)
        {
            if($password)
            {
                $user->password = Hash::make($password);
            }

            if($isDisable)
            {
                $user->is_disable = $isDisable;
            }
            $user->save();
            return $this->jsonResult(0,['id'=>$id]);
        }
        else
            return $this->jsonResult(501,['id'=>$id],'This id is not exist');


    }

    public function listOperator($page,$size)
    {
        $skip = ($page-1)*$size;

        $count = AManageUserModel::count();

        $items = AManageUserModel::skip($skip)->take($size)->orderBy('update_time')
            ->get(['id','name','position','user_mail','mob','role','is_disable'])->toArray();

        $data =['count'=>$count,'items'=>$items];
        return $this->jsonResult(0,$data);
    }

    public function getOperatorDetail($id)
    {
        $user = AManageUserModel::where('id',$id)->first(['id','name',
        'position','user_mail','mob','role','is_disable'])->toArray();

        return $this->jsonResult(0,$user);
    }

    public function logout()
    {

        $token = Cookie::get('token');
        $redis = Redis::connection();

        $status = $redis->del([$token]);

        return $this->jsonResult(0,$status);
    }

    public function getInfo(Request $request)
    {
        $user = $request->user;

        return $this->jsonResult(0,$user);
    }


}