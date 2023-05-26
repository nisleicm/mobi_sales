<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PagamentosPedido
 * 
 * @property int $codigo
 * @property string|null $nome_pessoa
 * @property string|null $obs
 * @property string|null $codpagamento
 * @property string|null $tipo_pagamento
 * @property int $codigo_pedido
 * @property float|null $valor_pago
 * @property float|null $valorpago_taxa
 * @property float|null $valorpago_consumo
 * @property int $codempresa
 *
 * @package App\Models
 */
class PagamentosPedido extends Model
{
	protected $table = 'pagamentos_pedido';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'codigo_pedido' => 'int',
		'valor_pago' => 'float',
		'valorpago_taxa' => 'float',
		'valorpago_consumo' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'nome_pessoa',
		'obs',
		'codpagamento',
		'tipo_pagamento',
		'codigo_pedido',
		'valor_pago',
		'valorpago_taxa',
		'valorpago_consumo',
		'codempresa'
	];
}
