<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Jul 2018 14:39:16 +0800.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WorldCitiesLocale
 *
 * @property int $id
 * @property int $city_id
 * @property string $name
 * @property string $alias
 * @property string $full_name
 * @property string $locale
 * @property \App\Models\WorldCity $world_city
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCitiesLocale whereAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCitiesLocale whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCitiesLocale whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCitiesLocale whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCitiesLocale whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldCitiesLocale whereName($value)
 * @mixin \Eloquent
 */
class WorldCitiesLocale extends Eloquent
{
	protected $table = 'world_cities_locale';
	public $timestamps = false;

	protected $casts = [
		'city_id' => 'int'
	];

	protected $fillable = [
		'city_id',
		'name',
		'alias',
		'full_name',
		'locale'
	];

	public function world_city()
	{
		return $this->belongsTo(\App\Models\WorldCity::class, 'city_id');
	}
}
