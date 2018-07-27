<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Jul 2018 14:39:16 +0800.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ReceAddress
 *
 * @property int $id
 * @property int $cust_id
 * @property string $country
 * @property string $state
 * @property string $city
 * @property string $county
 * @property string $address
 * @property string $postcode
 * @property string $name
 * @property string $mobile
 * @property string $IDNo
 * @property string $is_default
 * @property \Carbon\Carbon $create_time
 * @property string $deleted_at
 * @package App\Models
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ReceAddress onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReceAddress whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReceAddress whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReceAddress whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReceAddress whereCounty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReceAddress whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReceAddress whereCustId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReceAddress whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReceAddress whereIDNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReceAddress whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReceAddress whereIsDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReceAddress whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReceAddress whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReceAddress wherePostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReceAddress whereState($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ReceAddress withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ReceAddress withoutTrashed()
 * @mixin \Eloquent
 */
class ReceAddress extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'rece_address';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'cust_id' => 'int'
	];

	protected $dates = [
		'create_time'
	];

	protected $fillable = [
		'cust_id',
		'country',
		'state',
		'city',
		'county',
		'address',
		'postcode',
		'name',
		'mobile',
		'IDNo',
		'is_default',
		'create_time'
	];
}
