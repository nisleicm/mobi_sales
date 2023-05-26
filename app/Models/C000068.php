<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000068
 * 
 * @property string $codigo
 * @property string|null $numero
 * @property Carbon|null $data
 * @property string|null $cfop
 * @property string|null $codremetente
 * @property string|null $coddestinatario
 * @property int|null $situacao
 * @property string|null $tipo
 * @property string|null $consig_nome
 * @property string|null $consig_endereco
 * @property string|null $consig_cidade
 * @property string|null $consig_uf
 * @property string|null $consig_tipo
 * @property string|null $consig_calculado
 * @property string|null $rede_nome
 * @property string|null $rede_endereco
 * @property string|null $rede_cidade
 * @property string|null $rede_uf
 * @property string|null $rede_tipo
 * @property string|null $rede_cnpj
 * @property string|null $carga_natureza
 * @property string|null $carga_nf
 * @property float|null $carga_valor
 * @property float|null $carga_qtde
 * @property float|null $carga_vol_qtde
 * @property string|null $carga_vol_especie
 * @property string|null $carga_marca1
 * @property string|null $carga_marca2
 * @property float|null $frete_peso
 * @property float|null $frete_valor
 * @property float|null $frete_adicional
 * @property float|null $frete_seguro
 * @property float|null $frete_despacho
 * @property float|null $frete_outros
 * @property float|null $frete_total
 * @property float|null $frete_tarifa
 * @property float|null $frete_base
 * @property int|null $frete_aliquota
 * @property float|null $frete_icms
 * @property string|null $frete_pront
 * @property string|null $frete_apolice
 * @property string|null $frete_cia
 * @property string|null $frete_carregar
 * @property string|null $frete_descarregar
 * @property string|null $codveiculo
 * @property string|null $codtransportador
 * @property string|null $obs
 * @property string|null $codfilial
 * @property string|null $local
 * @property string|null $motivo
 * @property string|null $veiculo_local
 * @property string|null $veiculo_uf
 * @property string|null $modelo
 * @property string|null $especie
 * @property string|null $serie
 * @property string|null $modelo_nf
 * @property string|null $especie_nf
 * @property string|null $serie_nf
 * @property Carbon|null $data_nf
 * @property float|null $valor_conhecimento
 * @property string|null $inf1
 * @property string|null $inf2
 * @property string|null $inf3
 * @property string|null $inf4
 * @property string|null $inf5
 * @property string|null $carga_natureza2
 * @property string|null $carga_nf2
 * @property float|null $carga_valor2
 * @property float|null $carga_qtde2
 * @property float|null $carga_vol_qtde2
 * @property string|null $carga_vol_especie2
 * @property string|null $modelo_nf2
 * @property string|null $especie_nf2
 * @property string|null $serie_nf2
 * @property Carbon|null $data_nf2
 * @property float|null $valor_conhecimento2
 * @property string|null $chave_acesso
 * @property string|null $chave_acesso2
 * @property string|null $cte_xml
 * @property int|null $cte_situacao
 * @property Carbon|null $teste
 * @property string|null $origem_cmunini
 * @property string|null $origem_xmunini
 * @property string|null $origem_ufini
 * @property string|null $cmunfim
 * @property string|null $xmunfim
 * @property string|null $uffim
 * @property string|null $modal
 * @property string|null $tipo_servico
 * @property string|null $finalidade_emissao
 * @property string|null $forma_emissao
 * @property string|null $forma_pagamento
 * @property string|null $forma_impressao_dacte
 * @property string|null $chave_aceesso_referenciado
 * @property string|null $carac_ad_transp
 * @property string|null $carac_ad_serv
 * @property string|null $func_emissor
 * @property string|null $mun_origem_cal
 * @property string|null $mun_dest_cal
 * @property string|null $cod_rota_entrega
 * @property string|null $rota_entrega_sigla_origem
 * @property string|null $rota_entrega_sigla_dest
 * @property Carbon|null $prev_entrega_data_ini
 * @property Carbon|null $prev_entrega_data_fim
 * @property string|null $prev_entrega_data_tipo
 * @property string|null $prev_entrega_hora_tipo
 * @property Carbon|null $prev_entrega_hora_ini
 * @property Carbon|null $prev_entrega_hora_fim
 * @property string|null $recebedor_ret_afpe
 * @property string|null $detalhes_retirada
 * @property string|null $cod_emitente
 * @property string|null $cod_tomador
 * @property string|null $cod_remetente
 * @property string|null $remetente_tipo
 * @property string|null $remetente_informacoes_nf
 * @property string|null $cod_expedidor
 * @property string|null $expedidor_tipo
 * @property string|null $cod_recebedor
 * @property string|null $recebedor_tipo
 * @property string|null $cod_destinatario
 * @property string|null $destinatario_tipo
 * @property string|null $loc_entrega_dif_end_dest
 * @property string|null $cod_entrega_diferente
 * @property float|null $vtotal_servico
 * @property float|null $vl_areceber
 * @property float|null $vl_tot_impostos
 * @property string|null $cod_sit_tribut
 * @property string|null $inf_adic_int_fisco
 * @property float|null $vl_bc_icms
 * @property float|null $vl_aliq_icms
 * @property float|null $vl_icms
 * @property float|null $vl_cred_out_presu
 * @property float|null $vl_perc_reducap_bc
 * @property float|null $vl_carga
 * @property string|null $prod_predominante
 * @property string|null $out_caract_prod
 * @property string|null $resp_seguro
 * @property string|null $nome_seguradora
 * @property string|null $numero_apolice
 * @property string|null $numero_averbacao
 * @property float|null $vl_merc_averb
 * @property string|null $numero_fat
 * @property float|null $vl_original
 * @property float|null $vl_desconto
 * @property float|null $vl_liquido
 * @property string|null $rntrc
 * @property Carbon|null $data_prev_entrega
 * @property string|null $ind_lotacao
 * @property string|null $ciot
 * @property string|null $obs_gerais
 * @property string|null $versao_xml
 * @property string|null $uf_emissao
 * @property string|null $xmun_emissao
 * @property string|null $emissao_cmunini
 * @property string|null $tomador_tipo
 * @property string|null $tomador_cnpj
 * @property string|null $tomador_ie
 * @property string|null $tomador_nome
 * @property string|null $tomador_fant
 * @property string|null $tomador_endereco
 * @property string|null $tomador_numero
 * @property string|null $tomador_complem
 * @property string|null $tomador_bairro
 * @property string|null $tomador_cep
 * @property string|null $tomador_pais
 * @property string|null $tomador_uf
 * @property string|null $tomador_municipio
 * @property string|null $tomador_telefone
 * @property string|null $dif_endereco
 * @property string|null $pais
 * @property string|null $cod_pais
 * @property string|null $rem_bairro
 * @property int|null $ctchave
 * @property string|null $tomador_quem
 * @property string|null $modelo_nf3
 * @property string|null $protocolo
 * @property string|null $cte_pdf
 * @property string|null $autorizado
 * @property string|null $cce
 * @property string|null $cancelado
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000068 extends Model
{
	protected $table = 'c000068';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'situacao' => 'int',
		'carga_valor' => 'float',
		'carga_qtde' => 'float',
		'carga_vol_qtde' => 'float',
		'frete_peso' => 'float',
		'frete_valor' => 'float',
		'frete_adicional' => 'float',
		'frete_seguro' => 'float',
		'frete_despacho' => 'float',
		'frete_outros' => 'float',
		'frete_total' => 'float',
		'frete_tarifa' => 'float',
		'frete_base' => 'float',
		'frete_aliquota' => 'int',
		'frete_icms' => 'float',
		'data_nf' => 'datetime',
		'valor_conhecimento' => 'float',
		'carga_valor2' => 'float',
		'carga_qtde2' => 'float',
		'carga_vol_qtde2' => 'float',
		'data_nf2' => 'datetime',
		'valor_conhecimento2' => 'float',
		'cte_situacao' => 'int',
		'teste' => 'datetime',
		'prev_entrega_data_ini' => 'datetime',
		'prev_entrega_data_fim' => 'datetime',
		'prev_entrega_hora_ini' => 'datetime',
		'prev_entrega_hora_fim' => 'datetime',
		'vtotal_servico' => 'float',
		'vl_areceber' => 'float',
		'vl_tot_impostos' => 'float',
		'vl_bc_icms' => 'float',
		'vl_aliq_icms' => 'float',
		'vl_icms' => 'float',
		'vl_cred_out_presu' => 'float',
		'vl_perc_reducap_bc' => 'float',
		'vl_carga' => 'float',
		'vl_merc_averb' => 'float',
		'vl_original' => 'float',
		'vl_desconto' => 'float',
		'vl_liquido' => 'float',
		'data_prev_entrega' => 'datetime',
		'ctchave' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'numero',
		'data',
		'cfop',
		'codremetente',
		'coddestinatario',
		'situacao',
		'tipo',
		'consig_nome',
		'consig_endereco',
		'consig_cidade',
		'consig_uf',
		'consig_tipo',
		'consig_calculado',
		'rede_nome',
		'rede_endereco',
		'rede_cidade',
		'rede_uf',
		'rede_tipo',
		'rede_cnpj',
		'carga_natureza',
		'carga_nf',
		'carga_valor',
		'carga_qtde',
		'carga_vol_qtde',
		'carga_vol_especie',
		'carga_marca1',
		'carga_marca2',
		'frete_peso',
		'frete_valor',
		'frete_adicional',
		'frete_seguro',
		'frete_despacho',
		'frete_outros',
		'frete_total',
		'frete_tarifa',
		'frete_base',
		'frete_aliquota',
		'frete_icms',
		'frete_pront',
		'frete_apolice',
		'frete_cia',
		'frete_carregar',
		'frete_descarregar',
		'codveiculo',
		'codtransportador',
		'obs',
		'codfilial',
		'local',
		'motivo',
		'veiculo_local',
		'veiculo_uf',
		'modelo',
		'especie',
		'serie',
		'modelo_nf',
		'especie_nf',
		'serie_nf',
		'data_nf',
		'valor_conhecimento',
		'inf1',
		'inf2',
		'inf3',
		'inf4',
		'inf5',
		'carga_natureza2',
		'carga_nf2',
		'carga_valor2',
		'carga_qtde2',
		'carga_vol_qtde2',
		'carga_vol_especie2',
		'modelo_nf2',
		'especie_nf2',
		'serie_nf2',
		'data_nf2',
		'valor_conhecimento2',
		'chave_acesso',
		'chave_acesso2',
		'cte_xml',
		'cte_situacao',
		'teste',
		'origem_cmunini',
		'origem_xmunini',
		'origem_ufini',
		'cmunfim',
		'xmunfim',
		'uffim',
		'modal',
		'tipo_servico',
		'finalidade_emissao',
		'forma_emissao',
		'forma_pagamento',
		'forma_impressao_dacte',
		'chave_aceesso_referenciado',
		'carac_ad_transp',
		'carac_ad_serv',
		'func_emissor',
		'mun_origem_cal',
		'mun_dest_cal',
		'cod_rota_entrega',
		'rota_entrega_sigla_origem',
		'rota_entrega_sigla_dest',
		'prev_entrega_data_ini',
		'prev_entrega_data_fim',
		'prev_entrega_data_tipo',
		'prev_entrega_hora_tipo',
		'prev_entrega_hora_ini',
		'prev_entrega_hora_fim',
		'recebedor_ret_afpe',
		'detalhes_retirada',
		'cod_emitente',
		'cod_tomador',
		'cod_remetente',
		'remetente_tipo',
		'remetente_informacoes_nf',
		'cod_expedidor',
		'expedidor_tipo',
		'cod_recebedor',
		'recebedor_tipo',
		'cod_destinatario',
		'destinatario_tipo',
		'loc_entrega_dif_end_dest',
		'cod_entrega_diferente',
		'vtotal_servico',
		'vl_areceber',
		'vl_tot_impostos',
		'cod_sit_tribut',
		'inf_adic_int_fisco',
		'vl_bc_icms',
		'vl_aliq_icms',
		'vl_icms',
		'vl_cred_out_presu',
		'vl_perc_reducap_bc',
		'vl_carga',
		'prod_predominante',
		'out_caract_prod',
		'resp_seguro',
		'nome_seguradora',
		'numero_apolice',
		'numero_averbacao',
		'vl_merc_averb',
		'numero_fat',
		'vl_original',
		'vl_desconto',
		'vl_liquido',
		'rntrc',
		'data_prev_entrega',
		'ind_lotacao',
		'ciot',
		'obs_gerais',
		'versao_xml',
		'uf_emissao',
		'xmun_emissao',
		'emissao_cmunini',
		'tomador_tipo',
		'tomador_cnpj',
		'tomador_ie',
		'tomador_nome',
		'tomador_fant',
		'tomador_endereco',
		'tomador_numero',
		'tomador_complem',
		'tomador_bairro',
		'tomador_cep',
		'tomador_pais',
		'tomador_uf',
		'tomador_municipio',
		'tomador_telefone',
		'dif_endereco',
		'pais',
		'cod_pais',
		'rem_bairro',
		'ctchave',
		'tomador_quem',
		'modelo_nf3',
		'protocolo',
		'cte_pdf',
		'autorizado',
		'cce',
		'cancelado',
		'codempresa'
	];
}
