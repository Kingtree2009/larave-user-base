<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Jul 2018 14:39:16 +0800.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class City
 *
 * @property int $id
 * @property int $province_id
 * @property string $name
 * @property string $code
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City whereProvinceId($value)
 * @mixin \Eloquent
 */
class City extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'province_id' => 'int'
	];

	protected $fillable = [
		'province_id',
		'name',
		'code'
	];
}
