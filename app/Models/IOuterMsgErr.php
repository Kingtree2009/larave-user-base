<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Jul 2018 14:39:16 +0800.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class IOuterMsgErr
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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsgErr whereBillId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsgErr whereBillType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsgErr whereBusiType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsgErr whereComId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsgErr whereCreateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsgErr whereCreateUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsgErr whereDoneDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsgErr whereMsgId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsgErr whereRedoTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsgErr whereReponse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsgErr whereRequest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsgErr whereReturnCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsgErr whereReturnMsg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsgErr whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsgErr whereUpdateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsgErr whereUpdateUser($value)
 * @mixin \Eloquent
 */
class IOuterMsgErr extends Eloquent
{
	protected $table = 'i_outer_msg_err';
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
		'msg_id',
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
