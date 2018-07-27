<?php
/**
 * Created by PhpStorm.
 * User: kt
 * Date: 2018/7/4
 * Time: 上午11:46
 */

namespace App\Models\AnyunModels;


use App\Models\ReceAddress;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\AnyunModels\AReceAddressModel
 *
 * @property int $id 自生成主键
 * @property int $cust_id 用户主键，寄件人id
 * @property string $country 国家名
 * @property string $state 省
 * @property string $city 市
 * @property string|null $county 县
 * @property string|null $address
 * @property string|null $postcode 邮编
 * @property string|null $name 收件人
 * @property string|null $mobile
 * @property string|null $IDNo 收件人身份证号
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\AnyunModels\AReceAddressModel onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\AReceAddressModel whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\AReceAddressModel whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\AReceAddressModel whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\AReceAddressModel whereCounty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\AReceAddressModel whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\AReceAddressModel whereCustId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\AReceAddressModel whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\AReceAddressModel whereIDNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\AReceAddressModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\AReceAddressModel whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\AReceAddressModel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\AReceAddressModel wherePostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\AReceAddressModel whereState($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\AnyunModels\AReceAddressModel withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\AnyunModels\AReceAddressModel withoutTrashed()
 * @mixin \Eloquent
 * @property string|null $is_default yes,no
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\AReceAddressModel whereIsDefault($value)
 */
class AReceAddressModel extends ReceAddress
{

    use SoftDeletes;
    protected $dates = ['create_time','deleted_at'];
}