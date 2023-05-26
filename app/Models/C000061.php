<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000061
 * 
 * @property string $codigo
 * @property string|null $numero
 * @property string|null $cfop
 * @property Carbon|null $data
 * @property string|null $codcliente
 * @property float|null $valor_produtos
 * @property float|null $total_nota
 * @property float|null $base_calculo
 * @property float|null $valor_icms
 * @property float|null $base_sub
 * @property float|null $icms_sub
 * @property float|null $frete
 * @property float|null $seguro
 * @property float|null $outras_despesas
 * @property float|null $valor_total_ipi
 * @property int|null $itens
 * @property float|null $desconto
 * @property string|null $codtransportador
 * @property int|null $frete_conta
 * @property string|null $placa
 * @property string|null $placa_uf
 * @property float|null $vol_qtde
 * @property string|null $vol_especie
 * @property string|null $vol_marca
 * @property string|null $vol_numero
 * @property float|null $peso_liquido
 * @property float|null $peso_bruto
 * @property int|null $situacao
 * @property string|null $motivo
 * @property Carbon|null $faturamento_data1
 * @property Carbon|null $faturamento_data2
 * @property Carbon|null $faturamento_data3
 * @property Carbon|null $faturamento_data4
 * @property string|null $faturamento_numero1
 * @property string|null $faturamento_numero2
 * @property string|null $faturamento_numero3
 * @property string|null $faturamento_numero4
 * @property float|null $faturamento_valor1
 * @property float|null $faturamento_valor2
 * @property float|null $faturamento_valor3
 * @property float|null $faturamento_valor4
 * @property string|null $codfilial
 * @property string|null $obs1
 * @property string|null $obs2
 * @property string|null $obs3
 * @property string|null $inf2
 * @property string|null $inf3
 * @property string|null $inf4
 * @property string|null $inf5
 * @property Carbon|null $data_saida
 * @property string|null $hora
 * @property string|null $situacao_a
 * @property string|null $modelo_nf
 * @property string|null $serie_nf
 * @property float|null $valor_isento_icms
 * @property float|null $aliquota_icms
 * @property string|null $sit
 * @property string|null $codlancamento
 * @property string|null $movimento
 * @property string|null $baixa_estoque
 * @property string|null $tipo
 * @property string|null $os_cod1
 * @property string|null $os_cod2
 * @property string|null $os_cod3
 * @property string|null $os_cod4
 * @property string|null $os_cod5
 * @property string|null $os_cod6
 * @property string|null $os_serv1
 * @property string|null $os_serv2
 * @property string|null $os_serv3
 * @property string|null $os_serv4
 * @property string|null $os_serv5
 * @property string|null $os_serv6
 * @property string|null $os_comp1
 * @property string|null $os_comp2
 * @property string|null $os_comp3
 * @property string|null $os_comp4
 * @property string|null $os_comp5
 * @property string|null $os_comp6
 * @property float|null $os_qtde1
 * @property float|null $os_qtde2
 * @property float|null $os_qtde3
 * @property float|null $os_qtde4
 * @property float|null $os_qtde5
 * @property float|null $os_qtde6
 * @property float|null $os_unit1
 * @property float|null $os_unit2
 * @property float|null $os_unit3
 * @property float|null $os_unit4
 * @property float|null $os_unit5
 * @property float|null $os_unit6
 * @property float|null $os_total1
 * @property float|null $os_total2
 * @property float|null $os_total3
 * @property float|null $os_total4
 * @property float|null $os_total5
 * @property float|null $os_total6
 * @property float|null $os_iss
 * @property float|null $os_total_geral
 * @property float|null $os_total_iss
 * @property float|null $desconto_item
 * @property string|null $obs4
 * @property string|null $obs5
 * @property string|null $codigomodelo
 * @property string|null $custo_venda
 * @property string|null $fat_forma_pgto
 * @property string|null $fat_condi_pgto
 * @property int|null $fat_qtde_prestacao
 * @property int|null $fat_gerar_receber
 * @property int|null $fat_gerar_duplicata
 * @property float|null $pis
 * @property float|null $cofins
 * @property int|null $fat_tipo
 * @property string|null $codvendedor
 * @property string|null $operacao
 * @property int|null $integracao
 * @property int|null $nfe_situacao
 * @property string|null $nfe_xml
 * @property string|null $varejo_atacado
 * @property string|null $industrializacao
 * @property string|null $perda
 * @property Carbon|null $faturamento_data5
 * @property Carbon|null $faturamento_data6
 * @property string|null $faturamento_numero5
 * @property string|null $faturamento_numero6
 * @property float|null $faturamento_valor5
 * @property float|null $faturamento_valor6
 * @property Carbon|null $faturamento_data7
 * @property Carbon|null $faturamento_data8
 * @property Carbon|null $faturamento_data9
 * @property string|null $faturamento_numero7
 * @property string|null $faturamento_numero8
 * @property string|null $faturamento_numero9
 * @property float|null $faturamento_valor7
 * @property float|null $faturamento_valor8
 * @property float|null $faturamento_valor9
 * @property string|null $chave
 * @property string|null $natureza
 * @property int|null $tipo_finalidade
 * @property int|null $tipo_consumidor
 * @property string|null $ibpt_chave
 * @property float|null $ibpt_aliq_fed_nac
 * @property float|null $ibpt_aliq_fed_imp
 * @property float|null $ibpt_aliq_est
 * @property float|null $ibpt_aliq_mun
 * @property string|null $uf_origem
 * @property string|null $uf_destino
 * @property float|null $aliq_difal_inter
 * @property float|null $aliq_difal_intra
 * @property float|null $valor_fcp_destino
 * @property float|null $valor_difal
 * @property float|null $valor_difal_origem
 * @property float|null $valor_difal_destino
 * @property float|null $aliq_fcp_destino
 * @property float|null $porcentagem_difal_origem
 * @property float|null $porcentagem_difal_destino
 * @property int|null $indpres
 * @property float|null $valtotal_ipidevolvido
 * @property int|null $ind_ie_dest
 * @property float|null $vfcp
 * @property float|null $vfcpst
 * @property float|null $vfcpstret
 * @property int $seqevento
 * @property string|null $refnfe
 * @property float|null $vbcufdest
 * @property float|null $vicmsufdest
 * @property float|null $vicmsufremet
 * @property float|null $pfcpufdest
 * @property float|null $picmsufdest
 * @property float|null $picmsinter
 * @property float|null $picmsiterpart
 * @property float|null $vfcpufdesttotal
 * @property float|null $vfcpufdest
 * @property float|null $vicmsufdesttotal
 * @property float|null $vicmsufremettotal
 * @property float|null $difal
 * @property string|null $protocolo
 * @property string|null $xml_full
 * @property int|null $origem
 * @property int|null $ind_pag
 * @property int|null $ind_press
 * @property float|null $ret_valor_pis
 * @property float|null $ret_valor_cofins
 * @property float|null $ret_valor_csll
 * @property float|null $ret_valor_bc_irrf
 * @property float|null $ret_valor_irrf
 * @property float|null $ret_valor_bc_prev_soc
 * @property float|null $ret_valor_prev_soc
 * @property int|null $presenca_comprador
 * @property float|null $vipidevol
 * @property string|null $ent_cnpjcpf
 * @property string|null $ent_nome
 * @property string|null $ent_lgr
 * @property string|null $ent_nro
 * @property string|null $ent_cpl
 * @property string|null $ent_bairro
 * @property string|null $ent_cmun
 * @property string|null $ent_mun
 * @property string|null $ent_uf
 * @property string|null $ent_cep
 * @property string|null $ent_cpais
 * @property string|null $ent_pais
 * @property string|null $ent_fone
 * @property string|null $ent_email
 * @property string|null $ent_ie
 * @property string|null $inf1
 * @property string|null $xmlcancel
 * @property string|null $xmlautorizado
 * @property string|null $xmlgerado
 * @property string|null $pdfnfe
 * @property string|null $xmotivo
 * @property int $codempresa
 * @property int|null $opintermed
 * @property string|null $tipoentida
 * @property int|null $cod_sit
 * @property string|null $cce_eve
 * @property int|null $indintermed
 *
 * @package App\Models
 */
class C000061 extends Model
{
	protected $table = 'c000061';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'valor_produtos' => 'float',
		'total_nota' => 'float',
		'base_calculo' => 'float',
		'valor_icms' => 'float',
		'base_sub' => 'float',
		'icms_sub' => 'float',
		'frete' => 'float',
		'seguro' => 'float',
		'outras_despesas' => 'float',
		'valor_total_ipi' => 'float',
		'itens' => 'int',
		'desconto' => 'float',
		'frete_conta' => 'int',
		'vol_qtde' => 'float',
		'peso_liquido' => 'float',
		'peso_bruto' => 'float',
		'situacao' => 'int',
		'faturamento_data1' => 'datetime',
		'faturamento_data2' => 'datetime',
		'faturamento_data3' => 'datetime',
		'faturamento_data4' => 'datetime',
		'faturamento_valor1' => 'float',
		'faturamento_valor2' => 'float',
		'faturamento_valor3' => 'float',
		'faturamento_valor4' => 'float',
		'data_saida' => 'datetime',
		'valor_isento_icms' => 'float',
		'aliquota_icms' => 'float',
		'os_qtde1' => 'float',
		'os_qtde2' => 'float',
		'os_qtde3' => 'float',
		'os_qtde4' => 'float',
		'os_qtde5' => 'float',
		'os_qtde6' => 'float',
		'os_unit1' => 'float',
		'os_unit2' => 'float',
		'os_unit3' => 'float',
		'os_unit4' => 'float',
		'os_unit5' => 'float',
		'os_unit6' => 'float',
		'os_total1' => 'float',
		'os_total2' => 'float',
		'os_total3' => 'float',
		'os_total4' => 'float',
		'os_total5' => 'float',
		'os_total6' => 'float',
		'os_iss' => 'float',
		'os_total_geral' => 'float',
		'os_total_iss' => 'float',
		'desconto_item' => 'float',
		'fat_qtde_prestacao' => 'int',
		'fat_gerar_receber' => 'int',
		'fat_gerar_duplicata' => 'int',
		'pis' => 'float',
		'cofins' => 'float',
		'fat_tipo' => 'int',
		'integracao' => 'int',
		'nfe_situacao' => 'int',
		'faturamento_data5' => 'datetime',
		'faturamento_data6' => 'datetime',
		'faturamento_valor5' => 'float',
		'faturamento_valor6' => 'float',
		'faturamento_data7' => 'datetime',
		'faturamento_data8' => 'datetime',
		'faturamento_data9' => 'datetime',
		'faturamento_valor7' => 'float',
		'faturamento_valor8' => 'float',
		'faturamento_valor9' => 'float',
		'tipo_finalidade' => 'int',
		'tipo_consumidor' => 'int',
		'ibpt_aliq_fed_nac' => 'float',
		'ibpt_aliq_fed_imp' => 'float',
		'ibpt_aliq_est' => 'float',
		'ibpt_aliq_mun' => 'float',
		'aliq_difal_inter' => 'float',
		'aliq_difal_intra' => 'float',
		'valor_fcp_destino' => 'float',
		'valor_difal' => 'float',
		'valor_difal_origem' => 'float',
		'valor_difal_destino' => 'float',
		'aliq_fcp_destino' => 'float',
		'porcentagem_difal_origem' => 'float',
		'porcentagem_difal_destino' => 'float',
		'indpres' => 'int',
		'valtotal_ipidevolvido' => 'float',
		'ind_ie_dest' => 'int',
		'vfcp' => 'float',
		'vfcpst' => 'float',
		'vfcpstret' => 'float',
		'seqevento' => 'int',
		'vbcufdest' => 'float',
		'vicmsufdest' => 'float',
		'vicmsufremet' => 'float',
		'pfcpufdest' => 'float',
		'picmsufdest' => 'float',
		'picmsinter' => 'float',
		'picmsiterpart' => 'float',
		'vfcpufdesttotal' => 'float',
		'vfcpufdest' => 'float',
		'vicmsufdesttotal' => 'float',
		'vicmsufremettotal' => 'float',
		'difal' => 'float',
		'origem' => 'int',
		'ind_pag' => 'int',
		'ind_press' => 'int',
		'ret_valor_pis' => 'float',
		'ret_valor_cofins' => 'float',
		'ret_valor_csll' => 'float',
		'ret_valor_bc_irrf' => 'float',
		'ret_valor_irrf' => 'float',
		'ret_valor_bc_prev_soc' => 'float',
		'ret_valor_prev_soc' => 'float',
		'presenca_comprador' => 'int',
		'vipidevol' => 'float',
		'codempresa' => 'int',
		'opintermed' => 'int',
		'cod_sit' => 'int',
		'indintermed' => 'int'
	];

	protected $fillable = [
		'numero',
		'cfop',
		'data',
		'codcliente',
		'valor_produtos',
		'total_nota',
		'base_calculo',
		'valor_icms',
		'base_sub',
		'icms_sub',
		'frete',
		'seguro',
		'outras_despesas',
		'valor_total_ipi',
		'itens',
		'desconto',
		'codtransportador',
		'frete_conta',
		'placa',
		'placa_uf',
		'vol_qtde',
		'vol_especie',
		'vol_marca',
		'vol_numero',
		'peso_liquido',
		'peso_bruto',
		'situacao',
		'motivo',
		'faturamento_data1',
		'faturamento_data2',
		'faturamento_data3',
		'faturamento_data4',
		'faturamento_numero1',
		'faturamento_numero2',
		'faturamento_numero3',
		'faturamento_numero4',
		'faturamento_valor1',
		'faturamento_valor2',
		'faturamento_valor3',
		'faturamento_valor4',
		'codfilial',
		'obs1',
		'obs2',
		'obs3',
		'inf2',
		'inf3',
		'inf4',
		'inf5',
		'data_saida',
		'hora',
		'situacao_a',
		'modelo_nf',
		'serie_nf',
		'valor_isento_icms',
		'aliquota_icms',
		'sit',
		'codlancamento',
		'movimento',
		'baixa_estoque',
		'tipo',
		'os_cod1',
		'os_cod2',
		'os_cod3',
		'os_cod4',
		'os_cod5',
		'os_cod6',
		'os_serv1',
		'os_serv2',
		'os_serv3',
		'os_serv4',
		'os_serv5',
		'os_serv6',
		'os_comp1',
		'os_comp2',
		'os_comp3',
		'os_comp4',
		'os_comp5',
		'os_comp6',
		'os_qtde1',
		'os_qtde2',
		'os_qtde3',
		'os_qtde4',
		'os_qtde5',
		'os_qtde6',
		'os_unit1',
		'os_unit2',
		'os_unit3',
		'os_unit4',
		'os_unit5',
		'os_unit6',
		'os_total1',
		'os_total2',
		'os_total3',
		'os_total4',
		'os_total5',
		'os_total6',
		'os_iss',
		'os_total_geral',
		'os_total_iss',
		'desconto_item',
		'obs4',
		'obs5',
		'codigomodelo',
		'custo_venda',
		'fat_forma_pgto',
		'fat_condi_pgto',
		'fat_qtde_prestacao',
		'fat_gerar_receber',
		'fat_gerar_duplicata',
		'pis',
		'cofins',
		'fat_tipo',
		'codvendedor',
		'operacao',
		'integracao',
		'nfe_situacao',
		'nfe_xml',
		'varejo_atacado',
		'industrializacao',
		'perda',
		'faturamento_data5',
		'faturamento_data6',
		'faturamento_numero5',
		'faturamento_numero6',
		'faturamento_valor5',
		'faturamento_valor6',
		'faturamento_data7',
		'faturamento_data8',
		'faturamento_data9',
		'faturamento_numero7',
		'faturamento_numero8',
		'faturamento_numero9',
		'faturamento_valor7',
		'faturamento_valor8',
		'faturamento_valor9',
		'chave',
		'natureza',
		'tipo_finalidade',
		'tipo_consumidor',
		'ibpt_chave',
		'ibpt_aliq_fed_nac',
		'ibpt_aliq_fed_imp',
		'ibpt_aliq_est',
		'ibpt_aliq_mun',
		'uf_origem',
		'uf_destino',
		'aliq_difal_inter',
		'aliq_difal_intra',
		'valor_fcp_destino',
		'valor_difal',
		'valor_difal_origem',
		'valor_difal_destino',
		'aliq_fcp_destino',
		'porcentagem_difal_origem',
		'porcentagem_difal_destino',
		'indpres',
		'valtotal_ipidevolvido',
		'ind_ie_dest',
		'vfcp',
		'vfcpst',
		'vfcpstret',
		'seqevento',
		'refnfe',
		'vbcufdest',
		'vicmsufdest',
		'vicmsufremet',
		'pfcpufdest',
		'picmsufdest',
		'picmsinter',
		'picmsiterpart',
		'vfcpufdesttotal',
		'vfcpufdest',
		'vicmsufdesttotal',
		'vicmsufremettotal',
		'difal',
		'protocolo',
		'xml_full',
		'origem',
		'ind_pag',
		'ind_press',
		'ret_valor_pis',
		'ret_valor_cofins',
		'ret_valor_csll',
		'ret_valor_bc_irrf',
		'ret_valor_irrf',
		'ret_valor_bc_prev_soc',
		'ret_valor_prev_soc',
		'presenca_comprador',
		'vipidevol',
		'ent_cnpjcpf',
		'ent_nome',
		'ent_lgr',
		'ent_nro',
		'ent_cpl',
		'ent_bairro',
		'ent_cmun',
		'ent_mun',
		'ent_uf',
		'ent_cep',
		'ent_cpais',
		'ent_pais',
		'ent_fone',
		'ent_email',
		'ent_ie',
		'inf1',
		'xmlcancel',
		'xmlautorizado',
		'xmlgerado',
		'pdfnfe',
		'xmotivo',
		'codempresa',
		'opintermed',
		'tipoentida',
		'cod_sit',
		'cce_eve',
		'indintermed'
	];
}
