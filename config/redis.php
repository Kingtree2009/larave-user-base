<?php
/**
 * Created by PhpStorm.
 * User: kt
 * Date: 2018/2/2
 * Time: 下午4:55
 */

$env = env('REDIS_CONN','local');
switch ($env)
{
    case 'test':
    {
        $db = 'test';
        break;
    }
//    case 'production':
//    {
//        $db= '11:0';
//        break;
//    }
//    case 'console':
//        $db = 'console';
//        break;
    default:
    {
        $db = 'default';
    }

}


return
[
    'db'=>$db,

];