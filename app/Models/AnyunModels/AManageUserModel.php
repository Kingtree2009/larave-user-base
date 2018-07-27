<?php
/**
 * Created by PhpStorm.
 * User: kt
 * Date: 2018/7/2
 * Time: 下午2:12
 */

namespace App\Models\AnyunModels;


use App\Models\ManageUser;

/**
 * App\Models\AnyunModels\AManageUserModel
 *
 * @property int $id
 * @property string $name
 * @property string $password
 * @property string|null $user_mail
 * @property string|null $mob
 * @property string $role
 * @property string $position 职务
 * @property \Carbon\Carbon $update_time 登录时间
 * @property string $is_disable yes,no
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\AManageUserModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\AManageUserModel whereIsDisable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\AManageUserModel whereMob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\AManageUserModel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\AManageUserModel wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\AManageUserModel wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\AManageUserModel whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\AManageUserModel whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AnyunModels\AManageUserModel whereUserMail($value)
 * @mixin \Eloquent
 */
class AManageUserModel extends ManageUser
{

}