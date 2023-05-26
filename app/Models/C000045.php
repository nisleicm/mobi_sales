<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000045
 * 
 * @property string $id
 * @property string|null $codfuncionario
 * @property string|null $senha
 * @property Carbon|null $data
 * @property int|null $situacao
 * @property float|null $saldo
 * @property string|null $situacao_atual
 * @property int|null $abre_caixa_geral
 * @property int|null $todos_relatorios
 * @property int|null $numero_abertura
 * @property string|null $codfilial
 * @property string|null $codlocal
 * @property string|null $fechamento_cego
 * @property string|null $codloja
 * @property Carbon|null $datamov
 * @property string|null $idmovloja
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000045 extends Model
{
	protected $table = 'c000045';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'situacao' => 'int',
		'saldo' => 'float',
		'abre_caixa_geral' => 'int',
		'todos_relatorios' => 'int',
		'numero_abertura' => 'int',
		'datamov' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codfuncionario',
		'senha',
		'data',
		'situacao',
		'saldo',
		'situacao_atual',
		'abre_caixa_geral',
		'todos_relatorios',
		'numero_abertura',
		'codfilial',
		'codlocal',
		'fechamento_cego',
		'codloja',
		'datamov',
		'idmovloja',
		'codempresa'
	];
}
