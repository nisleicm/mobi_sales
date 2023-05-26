<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EstMov
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
 * @property string|null $placa
 *
 * @package App\Models
 */
class EstMov extends Model
{
	protected $table = 'est_mov';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'estoque_inicial' => 'float',
		'entradas' => 'float',
		'saidas' => 'float',
		'estoque_atual' => 'float',
		'ultima_entrada' => 'datetime',
		'ultima_saida' => 'datetime'
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
		'placa'
	];
}
