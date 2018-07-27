<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Jul 2018 14:39:16 +0800.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WorldContinent
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property \Illuminate\Database\Eloquent\Collection $world_continents_locales
 * @property \Illuminate\Database\Eloquent\Collection $world_countries
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldContinent whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldContinent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldContinent whereName($value)
 * @mixin \Eloquent
 */
class WorldContinent extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'name',
		'code'
	];

	public function world_continents_locales()
	{
		return $this->hasMany(\App\Models\WorldContinentsLocale::class, 'continent_id');
	}

	public function world_countries()
	{
		return $this->hasMany(\App\Models\WorldCountry::class, 'continent_id');
	}
}
