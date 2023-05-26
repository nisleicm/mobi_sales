<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000053
 * 
 * @property string $codservico
 * @property string|null $codtecnico
 * @property Carbon|null $data
 * @property float|null $valor
 * @property string|null $complemento
 * @property string $servico
 * @property string $codos
 * @property string|null $codcliente
 * @property float|null $qtde
 * @property float|null $unitario
 * @property string|null $codigo
 * @property string|null $tecnico
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000053 extends Model
{
	protected $table = 'c000053';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'valor' => 'float',
		'qtde' => 'float',
		'unitario' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codservico',
		'codtecnico',
		'data',
		'valor',
		'complemento',
		'servico',
		'codos',
		'codcliente',
		'qtde',
		'unitario',
		'codigo',
		'tecnico',
		'codempresa'
	];
}
