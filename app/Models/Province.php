<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Jul 2018 14:39:16 +0800.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Province
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Province whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Province whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Province whereName($value)
 * @mixin \Eloquent
 */
class Province extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'name',
		'code'
	];
}
