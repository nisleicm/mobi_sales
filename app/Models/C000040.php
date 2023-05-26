<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000040
 * 
 * @property string $codigo
 * @property Carbon|null $emissao
 * @property Carbon|null $vencimento
 * @property Carbon|null $data_deposito1
 * @property Carbon|null $data_deposito2
 * @property Carbon|null $data_devolucao1
 * @property Carbon|null $data_devolucao2
 * @property int|null $situacao
 * @property string|null $codcliente
 * @property string|null $titular
 * @property string|null $codbanco
 * @property string|null $agencia
 * @property string|null $conta
 * @property Carbon|null $data_conta
 * @property string|null $numero
 * @property float|null $valor
 * @property float|null $desconto
 * @property float|null $liquido
 * @property string|null $codvenda
 * @property string|null $obs1
 * @property string|null $obs2
 * @property string|null $codcontas_pagar
 * @property string|null $destino
 * @property Carbon|null $data_baixa
 * @property string|null $codconta_corrente
 * @property string|null $codconta
 * @property int $avista
 * @property string|null $codloja
 * @property int $codempresa
 * @property string|null $cliente_nome
 * @property int|null $baixar
 * @property int|null $notificar
 * @property int|null $task
 *
 * @package App\Models
 */
class C000040 extends Model
{
	protected $table = 'c000040';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'emissao' => 'datetime',
		'vencimento' => 'datetime',
		'data_deposito1' => 'datetime',
		'data_deposito2' => 'datetime',
		'data_devolucao1' => 'datetime',
		'data_devolucao2' => 'datetime',
		'situacao' => 'int',
		'data_conta' => 'datetime',
		'valor' => 'float',
		'desconto' => 'float',
		'liquido' => 'float',
		'data_baixa' => 'datetime',
		'avista' => 'int',
		'codempresa' => 'int',
		'baixar' => 'int',
		'notificar' => 'int',
		'task' => 'int'
	];

	protected $fillable = [
		'emissao',
		'vencimento',
		'data_deposito1',
		'data_deposito2',
		'data_devolucao1',
		'data_devolucao2',
		'situacao',
		'codcliente',
		'titular',
		'codbanco',
		'agencia',
		'conta',
		'data_conta',
		'numero',
		'valor',
		'desconto',
		'liquido',
		'codvenda',
		'obs1',
		'obs2',
		'codcontas_pagar',
		'destino',
		'data_baixa',
		'codconta_corrente',
		'codconta',
		'avista',
		'codloja',
		'codempresa',
		'cliente_nome',
		'baixar',
		'notificar',
		'task'
	];
}
