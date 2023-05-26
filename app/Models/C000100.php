<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000100
 * 
 * @property string|null $codproduto
 * @property string|null $codfilial
 * @property float|null $estoque_inicial
 * @property float|null $entradas
 * @property float|null $saidas
 * @property float|null $estoque_atual
 * @property Carbon|null $ultima_entrada
 * @property Carbon|null $ultima_saida
 * @property string|null $nota_fiscal
 * @property string|null $codloja
 * @property int|null $idonline
 * @property Carbon|null $datamov
 * @property string|null $idmovloja
 * @property int $codempresa
 * @property float|null $estoque_ant
 * @property Carbon|null $ultimaalt
 * @property Carbon|null $ultimamod
 * @property float|null $difere
 * @property int $id
 *
 * @package App\Models
 */
class C000100 extends Model
{
	protected $table = 'c000100';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'estoque_inicial' => 'float',
		'entradas' => 'float',
		'saidas' => 'float',
		'estoque_atual' => 'float',
		'ultima_entrada' => 'datetime',
		'ultima_saida' => 'datetime',
		'idonline' => 'int',
		'datamov' => 'datetime',
		'codempresa' => 'int',
		'estoque_ant' => 'float',
		'ultimaalt' => 'datetime',
		'ultimamod' => 'datetime',
		'difere' => 'float',
		'id' => 'int'
	];

	protected $fillable = [
		'codfilial',
		'estoque_inicial',
		'entradas',
		'saidas',
		'estoque_atual',
		'ultima_entrada',
		'ultima_saida',
		'nota_fiscal',
		'codloja',
		'idonline',
		'datamov',
		'idmovloja',
		'estoque_ant',
		'ultimaalt',
		'ultimamod',
		'difere',
		'id'
	];
}
