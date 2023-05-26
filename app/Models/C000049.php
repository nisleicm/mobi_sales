<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000049
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
 * @property float|null $p5
 * @property float|null $p3
 * @property string|null $numero_cupom
 * @property float|null $valor_venda
 * @property string|null $cod_venda_original
 * @property float|null $valor_atual_anterior
 * @property int|null $email_enviado
 * @property string|null $historico
 * @property int|null $boletogerado
 * @property int|null $situacao2
 * @property string|null $instrucao
 * @property string|null $dirboleto
 * @property string|null $codfilial
 * @property string|null $baixa_automatica
 * @property string|null $bol_impresso
 * @property string|null $cod_conta
 * @property string|null $remessa
 * @property string|null $retirado_por
 * @property string|null $codloja
 * @property int|null $idonline
 * @property Carbon|null $datamov
 * @property string|null $idmovloja
 * @property int $codempresa
 * @property int $id
 * @property Carbon|null $updated_at
 * @property Carbon|null $created_at
 *
 * @package App\Models
 */
class C000049 extends Model
{
	protected $table = 'c000049';
	public $incrementing = false;

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
		'p5' => 'float',
		'p3' => 'float',
		'valor_venda' => 'float',
		'valor_atual_anterior' => 'float',
		'email_enviado' => 'int',
		'boletogerado' => 'int',
		'situacao2' => 'int',
		'idonline' => 'int',
		'datamov' => 'datetime',
		'codempresa' => 'int',
		'id' => 'int'
	];

	protected $fillable = [
		'codigo',
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
		'codcedente',
		'p5',
		'p3',
		'numero_cupom',
		'valor_venda',
		'cod_venda_original',
		'valor_atual_anterior',
		'email_enviado',
		'historico',
		'boletogerado',
		'situacao2',
		'instrucao',
		'dirboleto',
		'codfilial',
		'baixa_automatica',
		'bol_impresso',
		'cod_conta',
		'remessa',
		'retirado_por',
		'codloja',
		'idonline',
		'datamov',
		'idmovloja',
		'codempresa',
		'id'
	];
}
