<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Jul 2018 14:39:16 +0800.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ZoneCode
 *
 * @property string $id
 * @property string $country_name
 * @property string $country_name_en
 * @property string $status
 * @property string $zone_code
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZoneCode whereCountryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZoneCode whereCountryNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZoneCode whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZoneCode whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ZoneCode whereZoneCode($value)
 * @mixin \Eloquent
 */
class ZoneCode extends Eloquent
{
	protected $table = 'zone_code';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'country_name',
		'country_name_en',
		'status',
		'zone_code'
	];
}
