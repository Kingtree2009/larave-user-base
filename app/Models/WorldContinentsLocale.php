<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Jul 2018 14:39:16 +0800.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WorldContinentsLocale
 *
 * @property int $id
 * @property int $continent_id
 * @property string $name
 * @property string $alias
 * @property string $abbr
 * @property string $full_name
 * @property string $locale
 * @property \App\Models\WorldContinent $world_continent
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldContinentsLocale whereAbbr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldContinentsLocale whereAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldContinentsLocale whereContinentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldContinentsLocale whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldContinentsLocale whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldContinentsLocale whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldContinentsLocale whereName($value)
 * @mixin \Eloquent
 */
class WorldContinentsLocale extends Eloquent
{
	protected $table = 'world_continents_locale';
	public $timestamps = false;

	protected $casts = [
		'continent_id' => 'int'
	];

	protected $fillable = [
		'continent_id',
		'name',
		'alias',
		'abbr',
		'full_name',
		'locale'
	];

	public function world_continent()
	{
		return $this->belongsTo(\App\Models\WorldContinent::class, 'continent_id');
	}
}
