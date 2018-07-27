<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Jul 2018 14:39:16 +0800.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class IOuterMsg
 *
 * @property int $msg_id
 * @property string $com_id
 * @property string $bill_type
 * @property string $bill_id
 * @property string $busi_type
 * @property int $redo_time
 * @property string $status
 * @property \Carbon\Carbon $create_date
 * @property string $create_user
 * @property \Carbon\Carbon $update_date
 * @property string $update_user
 * @property \Carbon\Carbon $done_date
 * @property string $return_code
 * @property string $return_msg
 * @property string $request
 * @property string $reponse
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsg whereBillId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsg whereBillType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsg whereBusiType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsg whereComId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsg whereCreateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsg whereCreateUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsg whereDoneDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsg whereMsgId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsg whereRedoTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsg whereReponse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsg whereRequest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsg whereReturnCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsg whereReturnMsg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsg whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsg whereUpdateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsg whereUpdateUser($value)
 * @mixin \Eloquent
 */
class IOuterMsg extends Eloquent
{
	protected $table = 'i_outer_msg';
	protected $primaryKey = 'msg_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'msg_id' => 'int',
		'redo_time' => 'int'
	];

	protected $dates = [
		'create_date',
		'update_date',
		'done_date'
	];

	protected $fillable = [
		'com_id',
		'bill_type',
		'bill_id',
		'busi_type',
		'redo_time',
		'status',
		'create_date',
		'create_user',
		'update_date',
		'update_user',
		'done_date',
		'return_code',
		'return_msg',
		'request',
		'reponse'
	];
}
