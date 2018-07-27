<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Jul 2018 14:39:16 +0800.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WorldCountriesLocale
 *
 * @property int $id
 * @property int $country_id
 * @property string $name
 * @property string $alias
 * @property string $abbr
 * @property string $full_name
 * @property string $currency_name
 * @property string $locale
 * @property \App\Models\WorldCountry $world_country
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCountriesLocale whereAbbr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCountriesLocale whereAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCountriesLocale whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCountriesLocale whereCurrencyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCountriesLocale whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCountriesLocale whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCountriesLocale whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCountriesLocale whereName($value)
 * @mixin \Eloquent
 */
class WorldCountriesLocale extends Eloquent
{
	protected $table = 'world_countries_locale';
	public $timestamps = false;

	protected $casts = [
		'country_id' => 'int'
	];

	protected $fillable = [
		'country_id',
		'name',
		'alias',
		'abbr',
		'full_name',
		'currency_name',
		'locale'
	];

	public function world_country()
	{
		return $this->belongsTo(\App\Models\WorldCountry::class, 'country_id');
	}
}
