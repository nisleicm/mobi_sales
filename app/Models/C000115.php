<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000115
 * 
 * @property string|null $codvenda
 * @property Carbon|null $data_venda
 * @property Carbon|null $data_entrega
 * @property string|null $codcliente
 * @property string|null $codproduto
 * @property string|null $produto
 * @property string|null $unidade
 * @property float|null $qtde_vendida
 * @property float|null $qtde_entregue
 * @property float|null $qtde_saldo
 * @property string|null $codvendedor
 * @property int|null $codigo
 * @property string|null $codloja
 * @property int $codempresa
 * @property int $id
 *
 * @package App\Models
 */
class C000115 extends Model
{
	protected $table = 'c000115s';
	public $timestamps = false;

	protected $casts = [
		'data_venda' => 'datetime',
		'data_entrega' => 'datetime',
		'qtde_vendida' => 'float',
		'qtde_entregue' => 'float',
		'qtde_saldo' => 'float',
		'codigo' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codvenda',
		'data_venda',
		'data_entrega',
		'codcliente',
		'codproduto',
		'produto',
		'unidade',
		'qtde_vendida',
		'qtde_entregue',
		'qtde_saldo',
		'codvendedor',
		'codigo',
		'codloja',
		'codempresa'
	];
}
