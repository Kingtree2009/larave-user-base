<?php
/**
 * Created by PhpStorm.
 * User: kt
 * Date: 2018/6/29
 * Time: 下午4:59
 */

namespace App\Http\Controllers;

use App\Http\Services\Utills;
use App\Mail\OrderShipped;
use App\Models\AnyunModels\ACustUser;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;
use Webpatser\Uuid\Uuid;
use PragmaRX\Countries\Package\Countries;
use Coldcoder\World\World;

class TestController extends Controller
{

    public function test(Request $request)
    {
//        $this->debug_view($request->user);
        $user = ACustUser::find(1);
        $user->email = 'lyl@in-ideal.com';
        $user->name = 'lyl';

        // Ship order...

        Mail::to($user)->send(new OrderShipped());
        return $this->jsonResult(0);
    }
}