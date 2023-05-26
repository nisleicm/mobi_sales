<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000111
 * 
 * @property int $codigo
 * @property string|null $ordem_producao
 * @property string|null $ano
 * @property string|null $hora
 * @property string $lote
 * @property string|null $codsetor
 * @property string $tipo
 * @property string|null $codtecnico
 * @property string $codproduto
 * @property Carbon|null $fabricacao
 * @property Carbon|null $validade
 * @property float|null $custo
 * @property Carbon|null $data_semiacabado
 * @property string|null $hora_semiacabado
 * @property Carbon|null $data_quarentena
 * @property string|null $hora_quarentena
 * @property float $quantidade
 * @property string|null $observacao
 * @property int|null $situacao
 * @property string|null $unidade
 * @property float|null $valor
 * @property string|null $codtecnico_libera
 * @property Carbon|null $data_libera
 * @property string|null $hora_libera
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000111 extends Model
{
	protected $table = 'c000111';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'fabricacao' => 'datetime',
		'validade' => 'datetime',
		'custo' => 'float',
		'data_semiacabado' => 'datetime',
		'data_quarentena' => 'datetime',
		'quantidade' => 'float',
		'situacao' => 'int',
		'valor' => 'float',
		'data_libera' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'ordem_producao',
		'ano',
		'hora',
		'lote',
		'codsetor',
		'tipo',
		'codtecnico',
		'codproduto',
		'fabricacao',
		'validade',
		'custo',
		'data_semiacabado',
		'hora_semiacabado',
		'data_quarentena',
		'hora_quarentena',
		'quantidade',
		'observacao',
		'situacao',
		'unidade',
		'valor',
		'codtecnico_libera',
		'data_libera',
		'hora_libera'
	];
}
