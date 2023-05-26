<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000026
 * 
 * @property string $codigo
 * @property string|null $codproduto
 * @property string|null $codfilial
 * @property Carbon|null $data_alteracao
 * @property float|null $cp_vprecocompra
 * @property float|null $cp_pipi
 * @property float|null $cp_vipi
 * @property float|null $cp_pretencao
 * @property float|null $cp_vretencao
 * @property float|null $cp_pfrete
 * @property float|null $cp_vfrete
 * @property float|null $cp_picms
 * @property float|null $cp_vicms
 * @property float|null $cp_preducao
 * @property float|null $cp_vreducao
 * @property float|null $cp_ppis
 * @property float|null $cp_vpis
 * @property float|null $cp_pcofins
 * @property float|null $cp_vcofins
 * @property float|null $cp_pseguro
 * @property float|null $cp_vseguro
 * @property float|null $cp_poutros
 * @property float|null $cp_voutros
 * @property float|null $vd_picms
 * @property float|null $vd_vicms
 * @property float|null $vd_preducao
 * @property float|null $vd_vreducao
 * @property float|null $vd_psimples
 * @property float|null $vd_vsimples
 * @property float|null $vd_ppis
 * @property float|null $vd_vpis
 * @property float|null $vd_pcofins
 * @property float|null $vd_vcofins
 * @property float|null $vd_pirpj
 * @property float|null $vd_virpj
 * @property float|null $vd_pcontsocial
 * @property float|null $vd_vcontsocial
 * @property float|null $vd_pdfixa
 * @property float|null $vd_vdfixa
 * @property float|null $vd_pcomissao
 * @property float|null $vd_vcomissao
 * @property float|null $vd_pdescmax
 * @property float|null $vd_vdescmax
 * @property float|null $pcusto_compra
 * @property float|null $vcusto_compra
 * @property float|null $pcusto_venda
 * @property float|null $vcusto_venda
 * @property float|null $preco_liquido
 * @property float|null $preco_unitario
 * @property float|null $fracao
 * @property float|null $pmargem1
 * @property float|null $pmargem2
 * @property float|null $pmargem3
 * @property float|null $pmargem4
 * @property float|null $pmargem5
 * @property float|null $precovarejo1
 * @property float|null $precovarejo2
 * @property float|null $precovarejo3
 * @property float|null $precovarejo4
 * @property float|null $precovarejo5
 * @property float|null $pmargematacado1
 * @property float|null $pmargematacado2
 * @property float|null $pmargematacado3
 * @property float|null $pmargematacado4
 * @property float|null $pmargematacado5
 * @property float|null $precoatacado1
 * @property float|null $precoatacado2
 * @property float|null $precoatacado3
 * @property float|null $precoatacado4
 * @property float|null $precoatacado5
 * @property int|null $tipo_regime
 * @property int|null $tipo_calculo
 * @property float|null $vcusto_compra_ant
 * @property float|null $precovarejo1_ant
 * @property float|null $custo_compra
 * @property float|null $valor_ultima_compra
 * @property float|null $frete_ipi_outras
 * @property float|null $icms_entrada
 * @property float|null $icms_saida
 * @property float|null $custo_operacional
 * @property float|null $outros_impostos
 * @property float|null $comissao
 * @property float|null $lucro
 * @property float|null $preco_venda
 * @property float|null $icms_entrada_p
 * @property float|null $icms_saida_p
 * @property float|null $custo_operacional_p
 * @property float|null $outros_impostos_p
 * @property float|null $comissao_p
 * @property float|null $lucro_p
 * @property float|null $total_custo
 * @property float|null $total_custo_p
 * @property int|null $preco_automatico
 * @property int|null $altera_automatico
 * @property float|null $novo_preco_venda
 * @property float|null $novo_preco_custo
 * @property float|null $desconto
 * @property float|null $frete
 * @property float|null $seguro
 * @property float|null $outras_despesas
 * @property float|null $ipi_p
 * @property float|null $ipi
 * @property float|null $pis_p
 * @property float|null $pis
 * @property float|null $cofins_p
 * @property float|null $cofins
 * @property float|null $contribuicao_social_p
 * @property float|null $contribuicao_social
 * @property float|null $pis_entrada_p
 * @property float|null $pis_entrada
 * @property float|null $cofins_entrada_p
 * @property float|null $cofins_entrada
 * @property float|null $contribuicao_social_entrada_p
 * @property float|null $substituicao_tributaria
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000026 extends Model
{
	protected $table = 'c000026';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data_alteracao' => 'datetime',
		'cp_vprecocompra' => 'float',
		'cp_pipi' => 'float',
		'cp_vipi' => 'float',
		'cp_pretencao' => 'float',
		'cp_vretencao' => 'float',
		'cp_pfrete' => 'float',
		'cp_vfrete' => 'float',
		'cp_picms' => 'float',
		'cp_vicms' => 'float',
		'cp_preducao' => 'float',
		'cp_vreducao' => 'float',
		'cp_ppis' => 'float',
		'cp_vpis' => 'float',
		'cp_pcofins' => 'float',
		'cp_vcofins' => 'float',
		'cp_pseguro' => 'float',
		'cp_vseguro' => 'float',
		'cp_poutros' => 'float',
		'cp_voutros' => 'float',
		'vd_picms' => 'float',
		'vd_vicms' => 'float',
		'vd_preducao' => 'float',
		'vd_vreducao' => 'float',
		'vd_psimples' => 'float',
		'vd_vsimples' => 'float',
		'vd_ppis' => 'float',
		'vd_vpis' => 'float',
		'vd_pcofins' => 'float',
		'vd_vcofins' => 'float',
		'vd_pirpj' => 'float',
		'vd_virpj' => 'float',
		'vd_pcontsocial' => 'float',
		'vd_vcontsocial' => 'float',
		'vd_pdfixa' => 'float',
		'vd_vdfixa' => 'float',
		'vd_pcomissao' => 'float',
		'vd_vcomissao' => 'float',
		'vd_pdescmax' => 'float',
		'vd_vdescmax' => 'float',
		'pcusto_compra' => 'float',
		'vcusto_compra' => 'float',
		'pcusto_venda' => 'float',
		'vcusto_venda' => 'float',
		'preco_liquido' => 'float',
		'preco_unitario' => 'float',
		'fracao' => 'float',
		'pmargem1' => 'float',
		'pmargem2' => 'float',
		'pmargem3' => 'float',
		'pmargem4' => 'float',
		'pmargem5' => 'float',
		'precovarejo1' => 'float',
		'precovarejo2' => 'float',
		'precovarejo3' => 'float',
		'precovarejo4' => 'float',
		'precovarejo5' => 'float',
		'pmargematacado1' => 'float',
		'pmargematacado2' => 'float',
		'pmargematacado3' => 'float',
		'pmargematacado4' => 'float',
		'pmargematacado5' => 'float',
		'precoatacado1' => 'float',
		'precoatacado2' => 'float',
		'precoatacado3' => 'float',
		'precoatacado4' => 'float',
		'precoatacado5' => 'float',
		'tipo_regime' => 'int',
		'tipo_calculo' => 'int',
		'vcusto_compra_ant' => 'float',
		'precovarejo1_ant' => 'float',
		'custo_compra' => 'float',
		'valor_ultima_compra' => 'float',
		'frete_ipi_outras' => 'float',
		'icms_entrada' => 'float',
		'icms_saida' => 'float',
		'custo_operacional' => 'float',
		'outros_impostos' => 'float',
		'comissao' => 'float',
		'lucro' => 'float',
		'preco_venda' => 'float',
		'icms_entrada_p' => 'float',
		'icms_saida_p' => 'float',
		'custo_operacional_p' => 'float',
		'outros_impostos_p' => 'float',
		'comissao_p' => 'float',
		'lucro_p' => 'float',
		'total_custo' => 'float',
		'total_custo_p' => 'float',
		'preco_automatico' => 'int',
		'altera_automatico' => 'int',
		'novo_preco_venda' => 'float',
		'novo_preco_custo' => 'float',
		'desconto' => 'float',
		'frete' => 'float',
		'seguro' => 'float',
		'outras_despesas' => 'float',
		'ipi_p' => 'float',
		'ipi' => 'float',
		'pis_p' => 'float',
		'pis' => 'float',
		'cofins_p' => 'float',
		'cofins' => 'float',
		'contribuicao_social_p' => 'float',
		'contribuicao_social' => 'float',
		'pis_entrada_p' => 'float',
		'pis_entrada' => 'float',
		'cofins_entrada_p' => 'float',
		'cofins_entrada' => 'float',
		'contribuicao_social_entrada_p' => 'float',
		'substituicao_tributaria' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'codproduto',
		'codfilial',
		'data_alteracao',
		'cp_vprecocompra',
		'cp_pipi',
		'cp_vipi',
		'cp_pretencao',
		'cp_vretencao',
		'cp_pfrete',
		'cp_vfrete',
		'cp_picms',
		'cp_vicms',
		'cp_preducao',
		'cp_vreducao',
		'cp_ppis',
		'cp_vpis',
		'cp_pcofins',
		'cp_vcofins',
		'cp_pseguro',
		'cp_vseguro',
		'cp_poutros',
		'cp_voutros',
		'vd_picms',
		'vd_vicms',
		'vd_preducao',
		'vd_vreducao',
		'vd_psimples',
		'vd_vsimples',
		'vd_ppis',
		'vd_vpis',
		'vd_pcofins',
		'vd_vcofins',
		'vd_pirpj',
		'vd_virpj',
		'vd_pcontsocial',
		'vd_vcontsocial',
		'vd_pdfixa',
		'vd_vdfixa',
		'vd_pcomissao',
		'vd_vcomissao',
		'vd_pdescmax',
		'vd_vdescmax',
		'pcusto_compra',
		'vcusto_compra',
		'pcusto_venda',
		'vcusto_venda',
		'preco_liquido',
		'preco_unitario',
		'fracao',
		'pmargem1',
		'pmargem2',
		'pmargem3',
		'pmargem4',
		'pmargem5',
		'precovarejo1',
		'precovarejo2',
		'precovarejo3',
		'precovarejo4',
		'precovarejo5',
		'pmargematacado1',
		'pmargematacado2',
		'pmargematacado3',
		'pmargematacado4',
		'pmargematacado5',
		'precoatacado1',
		'precoatacado2',
		'precoatacado3',
		'precoatacado4',
		'precoatacado5',
		'tipo_regime',
		'tipo_calculo',
		'vcusto_compra_ant',
		'precovarejo1_ant',
		'custo_compra',
		'valor_ultima_compra',
		'frete_ipi_outras',
		'icms_entrada',
		'icms_saida',
		'custo_operacional',
		'outros_impostos',
		'comissao',
		'lucro',
		'preco_venda',
		'icms_entrada_p',
		'icms_saida_p',
		'custo_operacional_p',
		'outros_impostos_p',
		'comissao_p',
		'lucro_p',
		'total_custo',
		'total_custo_p',
		'preco_automatico',
		'altera_automatico',
		'novo_preco_venda',
		'novo_preco_custo',
		'desconto',
		'frete',
		'seguro',
		'outras_despesas',
		'ipi_p',
		'ipi',
		'pis_p',
		'pis',
		'cofins_p',
		'cofins',
		'contribuicao_social_p',
		'contribuicao_social',
		'pis_entrada_p',
		'pis_entrada',
		'cofins_entrada_p',
		'cofins_entrada',
		'contribuicao_social_entrada_p',
		'substituicao_tributaria',
		'codempresa'
	];
}
