<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000076
 * 
 * @property string $codigo
 * @property string|null $codvenda
 * @property string|null $codvendedor
 * @property string|null $codcaixa
 * @property string|null $codcliente
 * @property Carbon|null $data_emissao
 * @property Carbon|null $data_vencimento
 * @property Carbon|null $data_pagamento
 * @property float|null $valor_original
 * @property float|null $valor_pago
 * @property float|null $valor_juros
 * @property float|null $valor_atual
 * @property float|null $valor_desconto
 * @property string|null $documento
 * @property string|null $tipo
 * @property int|null $situacao
 * @property int|null $filtro
 * @property string|null $nossonumero
 * @property string|null $codregiao
 * @property string|null $codcedente
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000076 extends Model
{
	protected $table = 'c000076';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data_emissao' => 'datetime',
		'data_vencimento' => 'datetime',
		'data_pagamento' => 'datetime',
		'valor_original' => 'float',
		'valor_pago' => 'float',
		'valor_juros' => 'float',
		'valor_atual' => 'float',
		'valor_desconto' => 'float',
		'situacao' => 'int',
		'filtro' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codvenda',
		'codvendedor',
		'codcaixa',
		'codcliente',
		'data_emissao',
		'data_vencimento',
		'data_pagamento',
		'valor_original',
		'valor_pago',
		'valor_juros',
		'valor_atual',
		'valor_desconto',
		'documento',
		'tipo',
		'situacao',
		'filtro',
		'nossonumero',
		'codregiao',
		'codcedente'
	];
}
