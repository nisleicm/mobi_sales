<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EnvMovLog
 * 
 * @property int $codigo
 * @property string|null $nomepadrao
 * @property Carbon|null $data
 * @property Carbon|null $hora
 * @property string|null $dir_xml
 * @property int|null $reenvio
 * @property int|null $substituto
 * @property int|null $envio
 *
 * @package App\Models
 */
class EnvMovLog extends Model
{
	protected $table = 'env_mov_log';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'data' => 'datetime',
		'hora' => 'datetime',
		'reenvio' => 'int',
		'substituto' => 'int',
		'envio' => 'int'
	];

	protected $fillable = [
		'codigo',
		'nomepadrao',
		'data',
		'hora',
		'dir_xml',
		'reenvio',
		'substituto',
		'envio'
	];
}
