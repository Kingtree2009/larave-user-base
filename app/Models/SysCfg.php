<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Jul 2018 14:39:16 +0800.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class SysCfg
 *
 * @property int $id
 * @property string $cfg_kind
 * @property string $cfg_code
 * @property string $value
 * @property string $cfg_desc
 * @property string $status
 * @property \Carbon\Carbon $create_date
 * @property string $remarks
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SysCfg whereCfgCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SysCfg whereCfgDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SysCfg whereCfgKind($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SysCfg whereCreateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SysCfg whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SysCfg whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SysCfg whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SysCfg whereValue($value)
 * @mixin \Eloquent
 */
class SysCfg extends Eloquent
{
	protected $table = 'sys_cfg';
	public $timestamps = false;

	protected $dates = [
		'create_date'
	];

	protected $fillable = [
		'cfg_kind',
		'cfg_code',
		'value',
		'cfg_desc',
		'status',
		'create_date',
		'remarks'
	];
}
