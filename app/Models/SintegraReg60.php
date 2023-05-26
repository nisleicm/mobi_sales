<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SintegraReg60
 * 
 * @property int $id
 * @property string|null $movimento
 * @property int|null $codigo_empresa
 * @property string|null $obs1
 * @property string|null $cnpj
 * @property string|null $ie
 * @property string|null $uf
 * @property int|null $codigo_cliente
 * @property string|null $cnpj_cliente
 * @property string|null $ie_cliente
 * @property string|null $uf_cliente
 * @property string|null $cfop
 * @property string|null $cod_sintegra_r60
 * @property Carbon|null $data_emissao
 * @property string|null $nro_serie_eqp
 * @property int|null $nro_ordem_eqp
 * @property string|null $modelo_doc
 * @property int|null $nro_contador_inicio
 * @property int|null $nro_contador_fim
 * @property int|null $nro_contador_z
 * @property int|null $nro_doc_fiscal
 * @property int|null $nro_itens
 * @property int|null $contador_reinicio
 * @property float|null $valor_venda_bruta
 * @property float|null $valor_total_geral
 * @property string|null $brancos
 * @property Carbon|null $datahora_recebimento
 * @property string|null $modelo_nf
 * @property Carbon|null $datahora_ini
 * @property Carbon|null $datahora_fim
 * @property float|null $cancelamento
 * @property float|null $desconto
 * @property float|null $issqn
 * @property float|null $substituicao_tributaria
 * @property float|null $isento
 * @property float|null $nao_incidencia
 * @property float|null $acrescimo_iof
 * @property float|null $aliquota01
 * @property float|null $aliquota02
 * @property float|null $aliquota03
 * @property float|null $aliquota04
 * @property float|null $aliquota05
 * @property float|null $base01
 * @property float|null $base02
 * @property float|null $base03
 * @property float|null $base04
 * @property float|null $base05
 * @property float|null $valor_tparcial01
 * @property float|null $valor_tparcial02
 * @property float|null $valor_tparcial03
 * @property float|null $valor_tparcial04
 * @property float|null $valor_tparcial05
 * @property string|null $brancos_60a01
 * @property string|null $brancos_60a02
 * @property string|null $brancos_60a03
 * @property string|null $brancos_60a04
 * @property string|null $brancos_60a05
 * @property float|null $total_inicio_dia
 * @property float|null $total_final_dia
 * @property float|null $total_dia
 * @property string|null $observacao
 * @property float|null $valor_venda_liquida
 * @property int|null $nro_contador_cancelamento
 * @property int $codempresa
 *
 * @package App\Models
 */
class SintegraReg60 extends Model
{
	protected $table = 'sintegra_reg60';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'codigo_empresa' => 'int',
		'codigo_cliente' => 'int',
		'data_emissao' => 'datetime',
		'nro_ordem_eqp' => 'int',
		'nro_contador_inicio' => 'int',
		'nro_contador_fim' => 'int',
		'nro_contador_z' => 'int',
		'nro_doc_fiscal' => 'int',
		'nro_itens' => 'int',
		'contador_reinicio' => 'int',
		'valor_venda_bruta' => 'float',
		'valor_total_geral' => 'float',
		'datahora_recebimento' => 'datetime',
		'datahora_ini' => 'datetime',
		'datahora_fim' => 'datetime',
		'cancelamento' => 'float',
		'desconto' => 'float',
		'issqn' => 'float',
		'substituicao_tributaria' => 'float',
		'isento' => 'float',
		'nao_incidencia' => 'float',
		'acrescimo_iof' => 'float',
		'aliquota01' => 'float',
		'aliquota02' => 'float',
		'aliquota03' => 'float',
		'aliquota04' => 'float',
		'aliquota05' => 'float',
		'base01' => 'float',
		'base02' => 'float',
		'base03' => 'float',
		'base04' => 'float',
		'base05' => 'float',
		'valor_tparcial01' => 'float',
		'valor_tparcial02' => 'float',
		'valor_tparcial03' => 'float',
		'valor_tparcial04' => 'float',
		'valor_tparcial05' => 'float',
		'total_inicio_dia' => 'float',
		'total_final_dia' => 'float',
		'total_dia' => 'float',
		'valor_venda_liquida' => 'float',
		'nro_contador_cancelamento' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'movimento',
		'codigo_empresa',
		'obs1',
		'cnpj',
		'ie',
		'uf',
		'codigo_cliente',
		'cnpj_cliente',
		'ie_cliente',
		'uf_cliente',
		'cfop',
		'cod_sintegra_r60',
		'data_emissao',
		'nro_serie_eqp',
		'nro_ordem_eqp',
		'modelo_doc',
		'nro_contador_inicio',
		'nro_contador_fim',
		'nro_contador_z',
		'nro_doc_fiscal',
		'nro_itens',
		'contador_reinicio',
		'valor_venda_bruta',
		'valor_total_geral',
		'brancos',
		'datahora_recebimento',
		'modelo_nf',
		'datahora_ini',
		'datahora_fim',
		'cancelamento',
		'desconto',
		'issqn',
		'substituicao_tributaria',
		'isento',
		'nao_incidencia',
		'acrescimo_iof',
		'aliquota01',
		'aliquota02',
		'aliquota03',
		'aliquota04',
		'aliquota05',
		'base01',
		'base02',
		'base03',
		'base04',
		'base05',
		'valor_tparcial01',
		'valor_tparcial02',
		'valor_tparcial03',
		'valor_tparcial04',
		'valor_tparcial05',
		'brancos_60a01',
		'brancos_60a02',
		'brancos_60a03',
		'brancos_60a04',
		'brancos_60a05',
		'total_inicio_dia',
		'total_final_dia',
		'total_dia',
		'observacao',
		'valor_venda_liquida',
		'nro_contador_cancelamento'
	];
}
