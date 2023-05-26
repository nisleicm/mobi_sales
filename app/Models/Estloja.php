<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Estloja
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
 * @property int $codigo
 *
 * @package App\Models
 */
class Estloja extends Model
{
	protected $table = 'estloja';
	protected $primaryKey = 'codigo';
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
		'difere' => 'float'
	];

	protected $fillable = [
		'codproduto',
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
		'codempresa',
		'estoque_ant',
		'ultimaalt',
		'ultimamod',
		'difere'
	];
}
