<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Jul 2018 14:39:16 +0800.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WorldCity
 *
 * @property int $id
 * @property int $country_id
 * @property int $division_id
 * @property string $name
 * @property string $full_name
 * @property string $code
 * @property \App\Models\WorldDivision $world_division
 * @property \App\Models\WorldCountry $world_country
 * @property \Illuminate\Database\Eloquent\Collection $world_cities_locales
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCity whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCity whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCity whereDivisionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCity whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCity whereName($value)
 * @mixin \Eloquent
 */
class WorldCity extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'country_id' => 'int',
		'division_id' => 'int'
	];

	protected $fillable = [
		'country_id',
		'division_id',
		'name',
		'full_name',
		'code'
	];

	public function world_division()
	{
		return $this->belongsTo(\App\Models\WorldDivision::class, 'division_id');
	}

	public function world_country()
	{
		return $this->belongsTo(\App\Models\WorldCountry::class, 'country_id');
	}

	public function world_cities_locales()
	{
		return $this->hasMany(\App\Models\WorldCitiesLocale::class, 'city_id');
	}
}
