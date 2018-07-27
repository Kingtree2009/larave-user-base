<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Jul 2018 14:39:16 +0800.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class StoreUser
 *
 * @property int $id
 * @property string $user_name
 * @property string $email
 * @property string $password
 * @property \Carbon\Carbon $update_date
 * @property string $store_id
 * @property string $mob
 * @property string $phone
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StoreUser whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StoreUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StoreUser whereMob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StoreUser wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StoreUser wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StoreUser whereStoreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StoreUser whereUpdateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StoreUser whereUserName($value)
 * @mixin \Eloquent
 */
class StoreUser extends Eloquent
{
	protected $table = 'store_user';
	public $timestamps = false;

	protected $dates = [
		'update_date'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'user_name',
		'email',
		'password',
		'update_date',
		'store_id',
		'mob',
		'phone'
	];
}
