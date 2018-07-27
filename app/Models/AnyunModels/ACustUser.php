<?php

namespace App\Models\AnyunModels;

use App\Models\CustUser;

/**
 * Created by PhpStorm.
 * 
 * User: kt
 * Date: 2018/6/30
 * Time: 下午2:56
 *
 * @property string $id
 * @property string $region 所在地区
 * @property string $email email
 * @property string $password password
 * @property \Carbon\Carbon $create_time 创建时间
 * @property \Carbon\Carbon $last_login_time 最近更新时间
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\ACustUser whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\ACustUser whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\ACustUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\ACustUser whereLastLoginTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\ACustUser wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\ACustUser whereRegion($value)
 * @mixin \Eloquent
 * @property string $currency 币种
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\ACustUser whereCurrency($value)
 * @property string $user_no 短号
 * @property string $isverified_email yes,no
 * @property string|null $moblie
 * @property string|null $isverified_mobile yes,no
 * @property string|null $wechat_id
 * @property string|null $IDNo 身份证
 * @property string|null $portrait 头像
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\ACustUser whereIDNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\ACustUser whereIsverifiedEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\ACustUser whereIsverifiedMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\ACustUser whereMoblie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\ACustUser wherePortrait($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\ACustUser whereUserNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\ACustUser whereWechatId($value)
 */
class ACustUser extends CustUser
{

}