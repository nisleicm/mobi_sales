<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000092
 * 
 * @property string $lote
 * @property int|null $situacao
 * @property string|null $codproduto
 * @property string|null $unidade
 * @property Carbon|null $fabricacao
 * @property Carbon|null $validade
 * @property int|null $validade_mes
 * @property string|null $reg_anvisa
 * @property string|null $tecnico
 * @property string|null $reg_tecnico
 * @property string|null $laudo_tecnico
 * @property float|null $quantidade
 * @property float|null $valor
 * @property string|null $observacao
 * @property string|null $hora
 * @property string|null $codsetor
 * @property string|null $ano
 * @property string|null $ordem_producao
 * @property string|null $codtecnico
 * @property string|null $lancamento
 * @property string|null $codnfentrada
 * @property string|null $codnfsaida
 * @property string|null $cfop
 * @property string|null $cst
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000092 extends Model
{
	protected $table = 'c000092';
	protected $primaryKey = 'lote';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'situacao' => 'int',
		'fabricacao' => 'datetime',
		'validade' => 'datetime',
		'validade_mes' => 'int',
		'quantidade' => 'float',
		'valor' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'situacao',
		'codproduto',
		'unidade',
		'fabricacao',
		'validade',
		'validade_mes',
		'reg_anvisa',
		'tecnico',
		'reg_tecnico',
		'laudo_tecnico',
		'quantidade',
		'valor',
		'observacao',
		'hora',
		'codsetor',
		'ano',
		'ordem_producao',
		'codtecnico',
		'lancamento',
		'codnfentrada',
		'codnfsaida',
		'cfop',
		'cst',
		'codempresa'
	];
}
