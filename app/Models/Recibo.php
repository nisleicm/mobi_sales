<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Recibo
 * 
 * @property int|null $sequencia
 * @property Carbon $data
 * @property int|null $filtro
 * @property Carbon|null $data_emissao
 * @property string $codigo
 * @property Carbon|null $data_vencimento
 * @property string $documento
 * @property float|null $valor_original
 * @property float|null $valor_pago
 * @property float|null $valor_atual
 * @property string|null $codcedente
 * @property string|null $tipo
 * @property float|null $valor_juros
 * @property Carbon|null $data_pagamento
 * @property string|null $codvendedor
 * @property string|null $codcaixa
 * @property string|null $codcliente
 * @property float|null $valor_desconto
 * @property int|null $situacao
 * @property string|null $codvenda
 * @property string|null $nossonumero
 * @property string|null $codregiao
 * @property int $codempresa
 *
 * @package App\Models
 */
class Recibo extends Model
{
	protected $table = 'recibos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'sequencia' => 'int',
		'data' => 'datetime',
		'filtro' => 'int',
		'data_emissao' => 'datetime',
		'data_vencimento' => 'datetime',
		'valor_original' => 'float',
		'valor_pago' => 'float',
		'valor_atual' => 'float',
		'valor_juros' => 'float',
		'data_pagamento' => 'datetime',
		'valor_desconto' => 'float',
		'situacao' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'sequencia',
		'data',
		'filtro',
		'data_emissao',
		'data_vencimento',
		'documento',
		'valor_original',
		'valor_pago',
		'valor_atual',
		'codcedente',
		'tipo',
		'valor_juros',
		'data_pagamento',
		'codvendedor',
		'codcaixa',
		'codcliente',
		'valor_desconto',
		'situacao',
		'codvenda',
		'nossonumero',
		'codregiao'
	];
}
