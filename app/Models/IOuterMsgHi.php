<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Jul 2018 14:39:16 +0800.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class IOuterMsgHi
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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsgHi whereBillId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsgHi whereBillType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsgHi whereBusiType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsgHi whereComId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsgHi whereCreateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsgHi whereCreateUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsgHi whereDoneDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsgHi whereMsgId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsgHi whereRedoTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsgHi whereReponse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsgHi whereRequest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsgHi whereReturnCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsgHi whereReturnMsg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsgHi whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsgHi whereUpdateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\IOuterMsgHi whereUpdateUser($value)
 * @mixin \Eloquent
 */
class IOuterMsgHi extends Eloquent
{
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
