<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000101
 * 
 * @property Carbon|null $data
 * @property string|null $hora
 * @property string|null $codusuario
 * @property string|null $tabela
 * @property string|null $codregistro
 * @property string|null $funcao
 * @property string|null $historico
 * @property string|null $codloja
 * @property Carbon|null $datamov
 * @property string|null $idmovloja
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000101 extends Model
{
	protected $table = 'c000101';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'datamov' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'data',
		'hora',
		'codusuario',
		'tabela',
		'codregistro',
		'funcao',
		'historico',
		'codloja',
		'datamov',
		'idmovloja',
		'codempresa'
	];
}
