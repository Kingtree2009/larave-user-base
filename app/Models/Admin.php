<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 30 Jun 2018 16:57:30 +0800.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Admin
 *
 * @property int $id
 * @property string $name
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @mixin \Eloquent
 */
class Admin extends Eloquent
{
	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'password',
		'remember_token'
	];
}
