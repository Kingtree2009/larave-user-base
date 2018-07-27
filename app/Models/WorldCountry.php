<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Jul 2018 14:39:16 +0800.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WorldCountry
 *
 * @property int $id
 * @property int $continent_id
 * @property string $name
 * @property string $full_name
 * @property string $capital
 * @property string $code
 * @property string $code_alpha3
 * @property string $emoji
 * @property bool $has_division
 * @property string $currency_code
 * @property string $currency_name
 * @property string $tld
 * @property string $callingcode
 * @property \App\Models\WorldContinent $world_continent
 * @property \Illuminate\Database\Eloquent\Collection $world_cities
 * @property \Illuminate\Database\Eloquent\Collection $world_countries_locales
 * @property \Illuminate\Database\Eloquent\Collection $world_divisions
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCountry whereCallingcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCountry whereCapital($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCountry whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCountry whereCodeAlpha3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCountry whereContinentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCountry whereCurrencyCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCountry whereCurrencyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCountry whereEmoji($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCountry whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCountry whereHasDivision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCountry whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCountry whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCountry whereTld($value)
 * @mixin \Eloquent
 */
class WorldCountry extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'continent_id' => 'int',
		'has_division' => 'bool'
	];

	protected $fillable = [
		'continent_id',
		'name',
		'full_name',
		'capital',
		'code',
		'code_alpha3',
		'emoji',
		'has_division',
		'currency_code',
		'currency_name',
		'tld',
		'callingcode'
	];

	public function world_continent()
	{
		return $this->belongsTo(\App\Models\WorldContinent::class, 'continent_id');
	}

	public function world_cities()
	{
		return $this->hasMany(\App\Models\WorldCity::class, 'country_id');
	}

	public function world_countries_locales()
	{
		return $this->hasMany(\App\Models\WorldCountriesLocale::class, 'country_id');
	}

	public function world_divisions()
	{
		return $this->hasMany(\App\Models\WorldDivision::class, 'country_id');
	}
}
