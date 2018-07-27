<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Jul 2018 14:39:16 +0800.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Store
 *
 * @property string $store_id
 * @property string $store_code
 * @property string $store_name
 * @property string $conutry
 * @property string $state
 * @property string $county
 * @property string $city
 * @property string $adress1
 * @property string $adress2
 * @property string $status
 * @property \Carbon\Carbon $create_date
 * @property string $create_user
 * @property \Carbon\Carbon $update_date
 * @property string $update_user
 * @property string $postcode
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Store whereAdress1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Store whereAdress2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Store whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Store whereConutry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Store whereCounty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Store whereCreateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Store whereCreateUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Store wherePostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Store whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Store whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Store whereStoreCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Store whereStoreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Store whereStoreName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Store whereUpdateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Store whereUpdateUser($value)
 * @mixin \Eloquent
 */
class Store extends Eloquent
{
	protected $table = 'store';
	protected $primaryKey = 'store_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'create_date',
		'update_date'
	];

	protected $fillable = [
		'store_code',
		'store_name',
		'conutry',
		'state',
		'county',
		'city',
		'adress1',
		'adress2',
		'status',
		'create_date',
		'create_user',
		'update_date',
		'update_user',
		'postcode'
	];
}
