<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Jul 2018 14:39:16 +0800.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WaybillMain
 *
 * @property int $main_id
 * @property string $main_order_id
 * @property string $logistics_numbers
 * @property string $logistics_id
 * @property string $express_numbers
 * @property string $origin_id
 * @property string $destination_id
 * @property \Carbon\Carbon $create_date
 * @property string $create_user
 * @property \Carbon\Carbon $update_date
 * @property string $update_user
 * @property string $status
 * @property float $declare_money
 * @property string $remark
 * @property float $freight
 * @property float $tax
 * @property float $charging_weight
 * @property string $pay_order
 * @property \Carbon\Carbon $pay_date
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillMain whereChargingWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillMain whereCreateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillMain whereCreateUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillMain whereDeclareMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillMain whereDestinationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillMain whereExpressNumbers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillMain whereFreight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillMain whereLogisticsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillMain whereLogisticsNumbers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillMain whereMainId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillMain whereMainOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillMain whereOriginId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillMain wherePayDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillMain wherePayOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillMain whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillMain whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillMain whereTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillMain whereUpdateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillMain whereUpdateUser($value)
 * @mixin \Eloquent
 */
class WaybillMain extends Eloquent
{
	protected $table = 'waybill_main';
	protected $primaryKey = 'main_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'main_id' => 'int',
		'declare_money' => 'float',
		'freight' => 'float',
		'tax' => 'float',
		'charging_weight' => 'float'
	];

	protected $dates = [
		'create_date',
		'update_date',
		'pay_date'
	];

	protected $fillable = [
		'main_order_id',
		'logistics_numbers',
		'logistics_id',
		'express_numbers',
		'origin_id',
		'destination_id',
		'create_date',
		'create_user',
		'update_date',
		'update_user',
		'status',
		'declare_money',
		'remark',
		'freight',
		'tax',
		'charging_weight',
		'pay_order',
		'pay_date'
	];
}
