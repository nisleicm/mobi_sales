<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000059
 * 
 * @property string|null $descricao
 * @property string|null $caminho
 * @property string|null $atualizar
 * @property string|null $hostname
 * @property string|null $cx
 * @property string|null $codloja
 * @property Carbon|null $datamov
 * @property int $codempresa
 * @property Carbon|null $data
 * @property Carbon|null $hora
 *
 * @package App\Models
 */
class C000059 extends Model
{
	protected $table = 'c000059';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'datamov' => 'datetime',
		'codempresa' => 'int',
		'data' => 'datetime',
		'hora' => 'datetime'
	];

	protected $fillable = [
		'descricao',
		'caminho',
		'atualizar',
		'hostname',
		'cx',
		'codloja',
		'datamov',
		'codempresa',
		'data',
		'hora'
	];
}
