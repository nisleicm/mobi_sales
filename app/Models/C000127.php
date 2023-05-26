<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000127
 * 
 * @property string $codigo
 * @property string $pedido
 * @property int|null $item
 * @property string|null $codproduto
 * @property string|null $referencia
 * @property string|null $cor
 * @property string|null $tamanho
 * @property int|null $quantidade
 * @property float|null $valor
 * @property float|null $desconto
 * @property float|null $total
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000127 extends Model
{
	protected $table = 'c000127';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'item' => 'int',
		'quantidade' => 'int',
		'valor' => 'float',
		'desconto' => 'float',
		'total' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'pedido',
		'item',
		'codproduto',
		'referencia',
		'cor',
		'tamanho',
		'quantidade',
		'valor',
		'desconto',
		'total'
	];
}
