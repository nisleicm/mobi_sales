<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FarmaciaInventario
 * 
 * @property string $codproduto
 * @property string|null $codbarra
 * @property string|null $produto
 * @property string|null $registro_medicamento
 * @property string|null $lote_medicamento
 * @property float|null $quantidade
 * @property Carbon|null $data
 * @property float|null $estoque
 * @property float|null $estoque_atual
 * @property float|null $compras
 * @property float|null $vendas
 * @property float|null $transferencias
 * @property float|null $perdas
 * @property float|null $precocusto
 * @property string|null $principioativo
 * @property string|null $apresentacao
 * @property string|null $codmarca
 * @property Carbon|null $validade
 * @property string|null $farmacia_dcb
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class FarmaciaInventario extends Model
{
	protected $table = 'farmacia_inventario';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'quantidade' => 'float',
		'data' => 'datetime',
		'estoque' => 'float',
		'estoque_atual' => 'float',
		'compras' => 'float',
		'vendas' => 'float',
		'transferencias' => 'float',
		'perdas' => 'float',
		'precocusto' => 'float',
		'validade' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codproduto',
		'codbarra',
		'produto',
		'registro_medicamento',
		'lote_medicamento',
		'quantidade',
		'data',
		'estoque',
		'estoque_atual',
		'compras',
		'vendas',
		'transferencias',
		'perdas',
		'precocusto',
		'principioativo',
		'apresentacao',
		'codmarca',
		'validade',
		'farmacia_dcb',
		'codempresa'
	];
}
