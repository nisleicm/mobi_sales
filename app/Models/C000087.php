<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000087
 * 
 * @property string $codigo
 * @property string|null $numero
 * @property string|null $codempresa
 * @property string|null $codfornecedor
 * @property string|null $modelo
 * @property string|null $especie
 * @property string|null $serie
 * @property string|null $cfop
 * @property Carbon|null $data_emissao
 * @property Carbon|null $data_lancamento
 * @property float|null $conf_baseicms
 * @property float|null $conf_valoricms
 * @property float|null $conf_basesub
 * @property float|null $conf_valorsub
 * @property float|null $conf_frete
 * @property float|null $conf_seguro
 * @property float|null $conf_outras
 * @property float|null $conf_ipi
 * @property float|null $conf_desconto
 * @property float|null $conf_totalprodutos
 * @property float|null $conf_totalnota
 * @property float|null $conf_icmsretido
 * @property float|null $conf_icmsredito_perc
 * @property float|null $base_icms
 * @property float|null $valor_icms
 * @property float|null $base_sub
 * @property float|null $valor_sub
 * @property float|null $frete
 * @property float|null $seguro
 * @property float|null $outras
 * @property float|null $ipi
 * @property float|null $desconto
 * @property float|null $total_produtos
 * @property float|null $total_nota
 * @property string|null $transp_nome
 * @property string|null $transp_frete
 * @property string|null $transp_placa
 * @property string|null $transp_placauf
 * @property string|null $transp_ie
 * @property string|null $transp_cnpj
 * @property string|null $transp_endereco
 * @property string|null $transp_cidade
 * @property string|null $transp_uf
 * @property float|null $transp_qtde
 * @property string|null $transp_especie
 * @property string|null $transp_marca
 * @property string|null $transp_numero
 * @property float|null $transp_pesobruto
 * @property float|null $transp_pesoliquido
 * @property string|null $obs1
 * @property string|null $obs2
 * @property string|null $obs3
 * @property string|null $obs4
 * @property string|null $obs5
 * @property string|null $obs6
 * @property string|null $obs7
 * @property int|null $situacao
 * @property int|null $itens
 * @property string|null $tipo
 * @property string|null $nota_fiscal
 * @property float|null $valor_mercadorias
 * @property string|null $codremetente
 * @property float|null $icms_isento
 * @property float|null $icms_outras
 * @property int|null $desconto_incidente
 * @property float|null $item_frete_valor
 * @property float|null $item_frete_base
 * @property float|null $item_frete_aliquota
 * @property float|null $item_frete_icms
 * @property float|null $item_seguro_valor
 * @property float|null $item_seguro_base
 * @property float|null $item_seguro_aliquota
 * @property float|null $item_seguro_icms
 * @property float|null $item_pis_valor
 * @property float|null $item_pis_base
 * @property float|null $item_pis_aliquota
 * @property float|null $item_pis_icms
 * @property float|null $item_complemento_valor
 * @property float|null $item_complemento_base
 * @property float|null $item_complemento_aliquota
 * @property float|null $item_complemento_icms
 * @property float|null $item_servico_valor
 * @property float|null $item_servico_base
 * @property float|null $item_servico_aliquota
 * @property float|null $item_servico_icms
 * @property float|null $item_outras_valor
 * @property float|null $item_outras_base
 * @property float|null $item_outras_aliquota
 * @property float|null $item_outras_icms
 * @property float|null $item_especial_total
 * @property float|null $item_especial_valor
 * @property int|null $baseicms_produtos
 * @property float|null $conf_item_especial
 * @property string|null $obs8
 * @property float|null $credito_icms
 * @property float|null $pis
 * @property float|null $cofins
 * @property string|null $operacao
 * @property int|null $integracao
 * @property string|null $aproveita_credito_icms
 * @property string|null $chave
 * @property int|null $nfe_situacao
 * @property string|null $nfe_xml
 * @property int|null $fat_tipo
 * @property int|null $fat_qtde_prestacao
 * @property Carbon|null $faturamento_data1
 * @property Carbon|null $faturamento_data2
 * @property Carbon|null $faturamento_data3
 * @property Carbon|null $faturamento_data4
 * @property Carbon|null $faturamento_data5
 * @property Carbon|null $faturamento_data6
 * @property Carbon|null $faturamento_data7
 * @property Carbon|null $faturamento_data8
 * @property Carbon|null $faturamento_data9
 * @property string|null $faturamento_numero1
 * @property string|null $faturamento_numero2
 * @property string|null $faturamento_numero3
 * @property string|null $faturamento_numero4
 * @property string|null $faturamento_numero5
 * @property string|null $faturamento_numero6
 * @property string|null $faturamento_numero7
 * @property string|null $faturamento_numero8
 * @property string|null $faturamento_numero9
 * @property float|null $faturamento_valor1
 * @property float|null $faturamento_valor2
 * @property float|null $faturamento_valor3
 * @property float|null $faturamento_valor4
 * @property float|null $faturamento_valor5
 * @property float|null $faturamento_valor6
 * @property float|null $faturamento_valor7
 * @property float|null $faturamento_valor8
 * @property float|null $faturamento_valor9
 * @property string|null $transpcod
 * @property int|null $seqevento
 * @property float|null $vbcufdest
 * @property float|null $vicmsufdest
 * @property float|null $pfcpufdest
 * @property float|null $picmsufdest
 * @property float|null $picmsinter
 * @property float|null $picmsinterpart
 * @property float|null $vfcpufdesttotal
 * @property float|null $vfcpufdest
 * @property float|null $vicmsufdesttotal
 * @property float|null $vicmsufremettotal
 * @property float|null $difal
 * @property float|null $vicmsufremet
 * @property int|null $tb_lig
 * @property string|null $tensao
 *
 * @package App\Models
 */
class C000087 extends Model
{
	protected $table = 'c000087';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data_emissao' => 'datetime',
		'data_lancamento' => 'datetime',
		'conf_baseicms' => 'float',
		'conf_valoricms' => 'float',
		'conf_basesub' => 'float',
		'conf_valorsub' => 'float',
		'conf_frete' => 'float',
		'conf_seguro' => 'float',
		'conf_outras' => 'float',
		'conf_ipi' => 'float',
		'conf_desconto' => 'float',
		'conf_totalprodutos' => 'float',
		'conf_totalnota' => 'float',
		'conf_icmsretido' => 'float',
		'conf_icmsredito_perc' => 'float',
		'base_icms' => 'float',
		'valor_icms' => 'float',
		'base_sub' => 'float',
		'valor_sub' => 'float',
		'frete' => 'float',
		'seguro' => 'float',
		'outras' => 'float',
		'ipi' => 'float',
		'desconto' => 'float',
		'total_produtos' => 'float',
		'total_nota' => 'float',
		'transp_qtde' => 'float',
		'transp_pesobruto' => 'float',
		'transp_pesoliquido' => 'float',
		'situacao' => 'int',
		'itens' => 'int',
		'valor_mercadorias' => 'float',
		'icms_isento' => 'float',
		'icms_outras' => 'float',
		'desconto_incidente' => 'int',
		'item_frete_valor' => 'float',
		'item_frete_base' => 'float',
		'item_frete_aliquota' => 'float',
		'item_frete_icms' => 'float',
		'item_seguro_valor' => 'float',
		'item_seguro_base' => 'float',
		'item_seguro_aliquota' => 'float',
		'item_seguro_icms' => 'float',
		'item_pis_valor' => 'float',
		'item_pis_base' => 'float',
		'item_pis_aliquota' => 'float',
		'item_pis_icms' => 'float',
		'item_complemento_valor' => 'float',
		'item_complemento_base' => 'float',
		'item_complemento_aliquota' => 'float',
		'item_complemento_icms' => 'float',
		'item_servico_valor' => 'float',
		'item_servico_base' => 'float',
		'item_servico_aliquota' => 'float',
		'item_servico_icms' => 'float',
		'item_outras_valor' => 'float',
		'item_outras_base' => 'float',
		'item_outras_aliquota' => 'float',
		'item_outras_icms' => 'float',
		'item_especial_total' => 'float',
		'item_especial_valor' => 'float',
		'baseicms_produtos' => 'int',
		'conf_item_especial' => 'float',
		'credito_icms' => 'float',
		'pis' => 'float',
		'cofins' => 'float',
		'integracao' => 'int',
		'nfe_situacao' => 'int',
		'fat_tipo' => 'int',
		'fat_qtde_prestacao' => 'int',
		'faturamento_data1' => 'datetime',
		'faturamento_data2' => 'datetime',
		'faturamento_data3' => 'datetime',
		'faturamento_data4' => 'datetime',
		'faturamento_data5' => 'datetime',
		'faturamento_data6' => 'datetime',
		'faturamento_data7' => 'datetime',
		'faturamento_data8' => 'datetime',
		'faturamento_data9' => 'datetime',
		'faturamento_valor1' => 'float',
		'faturamento_valor2' => 'float',
		'faturamento_valor3' => 'float',
		'faturamento_valor4' => 'float',
		'faturamento_valor5' => 'float',
		'faturamento_valor6' => 'float',
		'faturamento_valor7' => 'float',
		'faturamento_valor8' => 'float',
		'faturamento_valor9' => 'float',
		'seqevento' => 'int',
		'vbcufdest' => 'float',
		'vicmsufdest' => 'float',
		'pfcpufdest' => 'float',
		'picmsufdest' => 'float',
		'picmsinter' => 'float',
		'picmsinterpart' => 'float',
		'vfcpufdesttotal' => 'float',
		'vfcpufdest' => 'float',
		'vicmsufdesttotal' => 'float',
		'vicmsufremettotal' => 'float',
		'difal' => 'float',
		'vicmsufremet' => 'float',
		'tb_lig' => 'int'
	];

	protected $fillable = [
		'numero',
		'codempresa',
		'codfornecedor',
		'modelo',
		'especie',
		'serie',
		'cfop',
		'data_emissao',
		'data_lancamento',
		'conf_baseicms',
		'conf_valoricms',
		'conf_basesub',
		'conf_valorsub',
		'conf_frete',
		'conf_seguro',
		'conf_outras',
		'conf_ipi',
		'conf_desconto',
		'conf_totalprodutos',
		'conf_totalnota',
		'conf_icmsretido',
		'conf_icmsredito_perc',
		'base_icms',
		'valor_icms',
		'base_sub',
		'valor_sub',
		'frete',
		'seguro',
		'outras',
		'ipi',
		'desconto',
		'total_produtos',
		'total_nota',
		'transp_nome',
		'transp_frete',
		'transp_placa',
		'transp_placauf',
		'transp_ie',
		'transp_cnpj',
		'transp_endereco',
		'transp_cidade',
		'transp_uf',
		'transp_qtde',
		'transp_especie',
		'transp_marca',
		'transp_numero',
		'transp_pesobruto',
		'transp_pesoliquido',
		'obs1',
		'obs2',
		'obs3',
		'obs4',
		'obs5',
		'obs6',
		'obs7',
		'situacao',
		'itens',
		'tipo',
		'nota_fiscal',
		'valor_mercadorias',
		'codremetente',
		'icms_isento',
		'icms_outras',
		'desconto_incidente',
		'item_frete_valor',
		'item_frete_base',
		'item_frete_aliquota',
		'item_frete_icms',
		'item_seguro_valor',
		'item_seguro_base',
		'item_seguro_aliquota',
		'item_seguro_icms',
		'item_pis_valor',
		'item_pis_base',
		'item_pis_aliquota',
		'item_pis_icms',
		'item_complemento_valor',
		'item_complemento_base',
		'item_complemento_aliquota',
		'item_complemento_icms',
		'item_servico_valor',
		'item_servico_base',
		'item_servico_aliquota',
		'item_servico_icms',
		'item_outras_valor',
		'item_outras_base',
		'item_outras_aliquota',
		'item_outras_icms',
		'item_especial_total',
		'item_especial_valor',
		'baseicms_produtos',
		'conf_item_especial',
		'obs8',
		'credito_icms',
		'pis',
		'cofins',
		'operacao',
		'integracao',
		'aproveita_credito_icms',
		'chave',
		'nfe_situacao',
		'nfe_xml',
		'fat_tipo',
		'fat_qtde_prestacao',
		'faturamento_data1',
		'faturamento_data2',
		'faturamento_data3',
		'faturamento_data4',
		'faturamento_data5',
		'faturamento_data6',
		'faturamento_data7',
		'faturamento_data8',
		'faturamento_data9',
		'faturamento_numero1',
		'faturamento_numero2',
		'faturamento_numero3',
		'faturamento_numero4',
		'faturamento_numero5',
		'faturamento_numero6',
		'faturamento_numero7',
		'faturamento_numero8',
		'faturamento_numero9',
		'faturamento_valor1',
		'faturamento_valor2',
		'faturamento_valor3',
		'faturamento_valor4',
		'faturamento_valor5',
		'faturamento_valor6',
		'faturamento_valor7',
		'faturamento_valor8',
		'faturamento_valor9',
		'transpcod',
		'seqevento',
		'vbcufdest',
		'vicmsufdest',
		'pfcpufdest',
		'picmsufdest',
		'picmsinter',
		'picmsinterpart',
		'vfcpufdesttotal',
		'vfcpufdest',
		'vicmsufdesttotal',
		'vicmsufremettotal',
		'difal',
		'vicmsufremet',
		'tb_lig',
		'tensao'
	];
}
