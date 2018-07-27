<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Controller;
use App\Http\Controllers\CustomerUserController;
use Closure;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redis;

class CheckToken extends Controller
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(&$request, Closure $next)
    {
        $token = Cookie::get('token');

        if($token)
        {
            $redis = Redis::connection();

            $userJson = $redis->get($token);
            if($userJson)
            {
                $user = json_decode($userJson,true);
                $request->user = $user;
            }
            else
            {
                return $this->jsonResult(401,[],'Token is out of time,please re-login');
            }
        }
        return $next($request);

    }
}
