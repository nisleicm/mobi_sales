<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EstFifo
 * 
 * @property int $codigo
 * @property string|null $codproduto
 * @property Carbon|null $data_entrada
 * @property Carbon|null $data_termino
 * @property float|null $qtde_entrada
 * @property Carbon|null $ultima_saida
 * @property float|null $valor_custo
 * @property float|null $custo_compra
 * @property float|null $custo_op
 * @property float|null $aliq_venda
 * @property float|null $valor_venda_media
 * @property float|null $resultado_media
 * @property string|null $codfilial
 * @property int|null $codempresa
 * @property float|null $customedio
 * @property float|null $qtde_saida
 * @property string|null $codnf
 *
 * @package App\Models
 */
class EstFifo extends Model
{
	protected $table = 'est_fifo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'data_entrada' => 'datetime',
		'data_termino' => 'datetime',
		'qtde_entrada' => 'float',
		'ultima_saida' => 'datetime',
		'valor_custo' => 'float',
		'custo_compra' => 'float',
		'custo_op' => 'float',
		'aliq_venda' => 'float',
		'valor_venda_media' => 'float',
		'resultado_media' => 'float',
		'codempresa' => 'int',
		'customedio' => 'float',
		'qtde_saida' => 'float'
	];

	protected $fillable = [
		'codigo',
		'codproduto',
		'data_entrada',
		'data_termino',
		'qtde_entrada',
		'ultima_saida',
		'valor_custo',
		'custo_compra',
		'custo_op',
		'aliq_venda',
		'valor_venda_media',
		'resultado_media',
		'codfilial',
		'codempresa',
		'customedio',
		'qtde_saida',
		'codnf'
	];
}
