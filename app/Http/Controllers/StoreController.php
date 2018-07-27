<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Http\Services\Particle;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    public function creatStore(Request $request)
    {
        $post = $request->all();

        $storeId = strval(Particle::generateParticle());
        $data['store_id'] = $storeId;
        $data['store_code'] = $post['store_code'];
        $data['store_name'] = $post['store_name'];
        $data['store_manger'] = $post['store_manger']??'';
        $data['store_mail'] =  $post['store_mail'];
        $data['password'] = $post['password'];
        $data['mob'] = $post['mob']??'';
        $data['phone'] = $post['phone']??'';
        $data['conutry'] = $post['conutry']??'';
        $data['city'] = $post['city']??'';
        $data['adress1'] = $post['adress1'];
        $data['adress2'] = $post['adress2'];
        $data['status'] = $post['status']??'normal';
        $now = Carbon::now();
        $data['create_date'] = $now;
        $data['postcode'] = $post['postcode'];
        $data['update_user'] = '';
        $data['update_date'] = $now;

        Store::insert($data);

        return $this->jsonResult(0,$data);
    }
}
