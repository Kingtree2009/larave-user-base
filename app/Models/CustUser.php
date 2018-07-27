<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Jul 2018 14:39:16 +0800.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CustUser
 *
 * @property int $id
 * @property string $email
 * @property string $password
 * @property string $currency
 * @property string $region
 * @property string $user_no
 * @property string $isverified_email
 * @property string $moblie
 * @property string $isverified_mobile
 * @property string $wechat_id
 * @property string $IDNo
 * @property string $portrait
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $last_login_time
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CustUser whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CustUser whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CustUser whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CustUser whereIDNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CustUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CustUser whereIsverifiedEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CustUser whereIsverifiedMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CustUser whereLastLoginTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CustUser whereMoblie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CustUser wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CustUser wherePortrait($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CustUser whereRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CustUser whereUserNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CustUser whereWechatId($value)
 * @mixin \Eloquent
 */
class CustUser extends Eloquent
{
	protected $table = 'cust_user';
	public $timestamps = false;

	protected $dates = [
		'create_time',
		'last_login_time'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'email',
		'password',
		'currency',
		'region',
		'user_no',
		'isverified_email',
		'moblie',
		'isverified_mobile',
		'wechat_id',
		'IDNo',
		'portrait',
		'create_time',
		'last_login_time'
	];
}
