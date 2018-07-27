<?php
/**
 * Created by PhpStorm.
 * User: kt
 * Date: 2018/7/3
 * Time: 下午3:34
 */

namespace App\Http\Services;


class Utills
{

    public static function quickRandom($length = 5)
    {
        $pool = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
    }

}