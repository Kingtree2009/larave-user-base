<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Jul 2018 14:39:16 +0800.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ManageUser
 *
 * @property int $id
 * @property string $name
 * @property string $password
 * @property string $user_mail
 * @property string $mob
 * @property string $role
 * @property string $position
 * @property \Carbon\Carbon $update_time
 * @property string $is_disable
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ManageUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ManageUser whereIsDisable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ManageUser whereMob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ManageUser whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ManageUser wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ManageUser wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ManageUser whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ManageUser whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ManageUser whereUserMail($value)
 * @mixin \Eloquent
 */
class ManageUser extends Eloquent
{
	protected $table = 'manage_user';
	public $timestamps = false;

	protected $dates = [
		'update_time'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'name',
		'password',
		'user_mail',
		'mob',
		'role',
		'position',
		'update_time',
		'is_disable'
	];
}
