<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Jul 2018 14:39:16 +0800.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Area
 *
 * @property int $id
 * @property int $city_id
 * @property string $name
 * @property string $code
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Area whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Area whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Area whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Area whereName($value)
 * @mixin \Eloquent
 */
class Area extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'city_id' => 'int'
	];

	protected $fillable = [
		'city_id',
		'name',
		'code'
	];
}
