<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Itenspedido
 * 
 * @property int $codigo
 * @property int|null $codigo_pedido
 * @property string|null $codproduto
 * @property float|null $qtde
 * @property float|null $unitario
 * @property string|null $adicionais
 * @property int|null $juncao_movido
 * @property Carbon|null $horapedido
 * @property int|null $codpagamento
 * @property float|null $total
 * @property float|null $desconto
 * @property float|null $acrescimo
 * @property string|null $codfuncionario
 * @property string|null $obs
 * @property int|null $cancelado
 * @property string|null $produto
 * @property int|null $impresso
 * @property float|null $total_pago
 * @property float|null $total_restante
 * @property int $codempresa
 *
 * @package App\Models
 */
class Itenspedido extends Model
{
	protected $table = 'itenspedido';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'codigo_pedido' => 'int',
		'qtde' => 'float',
		'unitario' => 'float',
		'juncao_movido' => 'int',
		'horapedido' => 'datetime',
		'codpagamento' => 'int',
		'total' => 'float',
		'desconto' => 'float',
		'acrescimo' => 'float',
		'cancelado' => 'int',
		'impresso' => 'int',
		'total_pago' => 'float',
		'total_restante' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo_pedido',
		'codproduto',
		'qtde',
		'unitario',
		'adicionais',
		'juncao_movido',
		'horapedido',
		'codpagamento',
		'total',
		'desconto',
		'acrescimo',
		'codfuncionario',
		'obs',
		'cancelado',
		'produto',
		'impresso',
		'total_pago',
		'total_restante',
		'codempresa'
	];
}
