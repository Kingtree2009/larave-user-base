<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Jul 2018 14:39:16 +0800.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WaybillOrder
 *
 * @property int $order_id
 * @property int $main_id
 * @property string $commodity_type_id
 * @property string $commodity_name
 * @property float $commodity_price
 * @property int $commodity_quantity
 * @property float $weight
 * @property float $total_amount
 * @property \Carbon\Carbon $create_date
 * @property string $status
 * @property string $specifications
 * @package App\Models
 * @property string|null $unit 单位
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillOrder whereCommodityName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillOrder whereCommodityPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillOrder whereCommodityQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillOrder whereCommodityTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillOrder whereCreateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillOrder whereMainId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillOrder whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillOrder whereSpecifications($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillOrder whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillOrder whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillOrder whereUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillOrder whereWeight($value)
 * @mixin \Eloquent
 */
class WaybillOrder extends Eloquent
{
	protected $table = 'waybill_order';
	protected $primaryKey = 'order_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'order_id' => 'int',
		'main_id' => 'int',
		'commodity_price' => 'float',
		'commodity_quantity' => 'int',
		'weight' => 'float',
		'total_amount' => 'float'
	];

	protected $dates = [
		'create_date'
	];

	protected $fillable = [
		'main_id',
		'commodity_type_id',
		'commodity_name',
		'commodity_price',
		'commodity_quantity',
		'weight',
		'total_amount',
		'create_date',
		'status',
		'specifications'
	];
}
