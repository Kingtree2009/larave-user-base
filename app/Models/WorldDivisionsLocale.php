<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Jul 2018 14:39:16 +0800.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WorldDivisionsLocale
 *
 * @property int $id
 * @property int $division_id
 * @property string $name
 * @property string $abbr
 * @property string $alias
 * @property string $full_name
 * @property string $locale
 * @property \App\Models\WorldDivision $world_division
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldDivisionsLocale whereAbbr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldDivisionsLocale whereAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldDivisionsLocale whereDivisionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldDivisionsLocale whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldDivisionsLocale whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldDivisionsLocale whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WorldDivisionsLocale whereName($value)
 * @mixin \Eloquent
 */
class WorldDivisionsLocale extends Eloquent
{
	protected $table = 'world_divisions_locale';
	public $timestamps = false;

	protected $casts = [
		'division_id' => 'int'
	];

	protected $fillable = [
		'division_id',
		'name',
		'abbr',
		'alias',
		'full_name',
		'locale'
	];

	public function world_division()
	{
		return $this->belongsTo(\App\Models\WorldDivision::class, 'division_id');
	}
}
