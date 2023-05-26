<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000097
 * 
 * @property string|null $codproduto
 * @property string|null $produto
 * @property string|null $unidade
 * @property float|null $qtde
 * @property float|null $unitario
 * @property float|null $desconto
 * @property float|null $acrescimo
 * @property float|null $total
 * @property string|null $codorcamento
 * @property float|null $venda
 * @property string|null $codloja
 * @property Carbon|null $datamov
 * @property string|null $idmovloja
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000097 extends Model
{
	protected $table = 'c000097';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'qtde' => 'float',
		'unitario' => 'float',
		'desconto' => 'float',
		'acrescimo' => 'float',
		'total' => 'float',
		'venda' => 'float',
		'datamov' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codproduto',
		'produto',
		'unidade',
		'qtde',
		'unitario',
		'desconto',
		'acrescimo',
		'total',
		'codorcamento',
		'venda',
		'codloja',
		'datamov',
		'idmovloja',
		'codempresa'
	];
}
