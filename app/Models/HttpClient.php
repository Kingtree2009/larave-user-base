<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Jul 2018 14:39:16 +0800.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class HttpClient
 *
 * @property int $id
 * @property string $http_code
 * @property int $host_max
 * @property int $client_max
 * @property int $acquire_timeout
 * @property int $connect_timeout
 * @property string $url
 * @property int $timeout
 * @property string $resp_type
 * @property string $STATUS
 * @property string $reqHeader
 * @property string $remark
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HttpClient whereAcquireTimeout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HttpClient whereClientMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HttpClient whereConnectTimeout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HttpClient whereHostMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HttpClient whereHttpCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HttpClient whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HttpClient whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HttpClient whereReqHeader($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HttpClient whereRespType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HttpClient whereSTATUS($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HttpClient whereTimeout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HttpClient whereUrl($value)
 * @mixin \Eloquent
 */
class HttpClient extends Eloquent
{
	protected $table = 'http_client';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'host_max' => 'int',
		'client_max' => 'int',
		'acquire_timeout' => 'int',
		'connect_timeout' => 'int',
		'timeout' => 'int'
	];

	protected $fillable = [
		'http_code',
		'host_max',
		'client_max',
		'acquire_timeout',
		'connect_timeout',
		'url',
		'timeout',
		'resp_type',
		'STATUS',
		'reqHeader',
		'remark'
	];
}
