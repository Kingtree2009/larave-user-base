<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Jul 2018 14:39:16 +0800.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WorldDivision
 *
 * @property int $id
 * @property int $country_id
 * @property string $name
 * @property string $full_name
 * @property string $code
 * @property bool $has_city
 * @property \App\Models\WorldCountry $world_country
 * @property \Illuminate\Database\Eloquent\Collection $world_cities
 * @property \Illuminate\Database\Eloquent\Collection $world_divisions_locales
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldDivision whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldDivision whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldDivision whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldDivision whereHasCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldDivision whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldDivision whereName($value)
 * @mixin \Eloquent
 */
class WorldDivision extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'country_id' => 'int',
		'has_city' => 'bool'
	];

	protected $fillable = [
		'country_id',
		'name',
		'full_name',
		'code',
		'has_city'
	];

	public function world_country()
	{
		return $this->belongsTo(\App\Models\WorldCountry::class, 'country_id');
	}

	public function world_cities()
	{
		return $this->hasMany(\App\Models\WorldCity::class, 'division_id');
	}

	public function world_divisions_locales()
	{
		return $this->hasMany(\App\Models\WorldDivisionsLocale::class, 'division_id');
	}
}
