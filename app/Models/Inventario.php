<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Inventario
 * 
 * @property string $codproduto
 * @property Carbon|null $data
 * @property float|null $estoque
 * @property float|null $custo
 * @property string|null $produto
 * @property string|null $unidade
 * @property string|null $cst
 * @property float|null $aliquota
 * @property float|null $venda
 * @property float|null $total
 * @property string|null $tipo
 * @property int|null $ano
 * @property int|null $mes
 * @property Carbon|null $data_posterior
 * @property string|null $prodcodgrupo
 * @property string|null $codbarra
 * @property int $codempresa
 *
 * @package App\Models
 */
class Inventario extends Model
{
	protected $table = 'inventario';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'estoque' => 'float',
		'custo' => 'float',
		'aliquota' => 'float',
		'venda' => 'float',
		'total' => 'float',
		'ano' => 'int',
		'mes' => 'int',
		'data_posterior' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codproduto',
		'data',
		'estoque',
		'custo',
		'produto',
		'unidade',
		'cst',
		'aliquota',
		'venda',
		'total',
		'tipo',
		'ano',
		'mes',
		'data_posterior',
		'prodcodgrupo',
		'codbarra',
		'codempresa'
	];
}
