<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Jul 2018 14:39:16 +0800.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class SupportGen
 *
 * @property string $table_name
 * @property string $extend_table
 * @property string $implements
 * @property string $package_name
 * @property string $rebuild
 * @property string $preset
 * @property string $bill_no
 * @property string $only_query
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SupportGen whereBillNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SupportGen whereExtendTable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SupportGen whereImplements($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SupportGen whereOnlyQuery($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SupportGen wherePackageName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SupportGen wherePreset($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SupportGen whereRebuild($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SupportGen whereTableName($value)
 * @mixin \Eloquent
 */
class SupportGen extends Eloquent
{
	protected $table = 'support_gen';
	protected $primaryKey = 'table_name';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'extend_table',
		'implements',
		'package_name',
		'rebuild',
		'preset',
		'bill_no',
		'only_query'
	];
}
