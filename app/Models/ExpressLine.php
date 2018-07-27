<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Jul 2018 14:39:16 +0800.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ExpressLine
 *
 * @property int $id
 * @property string $country
 * @property string $currency
 * @property float $exchange_rate
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 * @property string $deleted_at
 * @package App\Models
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ExpressLine onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExpressLine whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExpressLine whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExpressLine whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExpressLine whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExpressLine whereExchangeRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExpressLine whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExpressLine whereUpdateTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ExpressLine withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ExpressLine withoutTrashed()
 * @mixin \Eloquent
 */
class ExpressLine extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'express_line';
	public $timestamps = false;

	protected $casts = [
		'exchange_rate' => 'float'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'country',
		'currency',
		'exchange_rate',
		'create_time',
		'update_time'
	];
}
