<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Jul 2018 14:39:16 +0800.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WaybillPay
 *
 * @property string $pay_id
 * @property string $serial_number
 * @property \Carbon\Carbon $pay_date
 * @property string $pay_status
 * @property string $main_order_id
 * @property string $pay_type
 * @property float $pay_sum
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillPay whereMainOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillPay wherePayDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillPay wherePayId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillPay wherePayStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillPay wherePaySum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillPay wherePayType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WaybillPay whereSerialNumber($value)
 * @mixin \Eloquent
 */
class WaybillPay extends Eloquent
{
	protected $table = 'waybill_pay';
	protected $primaryKey = 'pay_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'pay_sum' => 'float'
	];

	protected $dates = [
		'pay_date'
	];

	protected $fillable = [
		'serial_number',
		'pay_date',
		'pay_status',
		'main_order_id',
		'pay_type',
		'pay_sum'
	];
}
