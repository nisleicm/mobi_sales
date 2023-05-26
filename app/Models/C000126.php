<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000126
 * 
 * @property string $codigo
 * @property string $pedido
 * @property string|null $lote
 * @property string $codcliente
 * @property Carbon|null $data_pedido
 * @property Carbon|null $data_entrega
 * @property string|null $condicao_pagamento
 * @property string|null $responsavel
 * @property string|null $codrepresentante
 * @property float|null $valor
 * @property string|null $obs1
 * @property string|null $obs2
 * @property string|null $obs3
 * @property string|null $obs4
 * @property string|null $obs5
 * @property int|null $situacao
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000126 extends Model
{
	protected $table = 'c000126';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data_pedido' => 'datetime',
		'data_entrega' => 'datetime',
		'valor' => 'float',
		'situacao' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'pedido',
		'lote',
		'codcliente',
		'data_pedido',
		'data_entrega',
		'condicao_pagamento',
		'responsavel',
		'codrepresentante',
		'valor',
		'obs1',
		'obs2',
		'obs3',
		'obs4',
		'obs5',
		'situacao'
	];
}
