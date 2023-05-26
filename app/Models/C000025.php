<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000025
 * 
 * @property string $codigo
 * @property string|null $codbarra
 * @property string|null $produto
 * @property string|null $unidade
 * @property Carbon|null $data_cadastro
 * @property string|null $codgrupo
 * @property string|null $codsubgrupo
 * @property string|null $codfornecedor
 * @property string|null $codmarca
 * @property Carbon|null $data_ultimacompra
 * @property string|null $notafiscal
 * @property float|null $precocusto
 * @property float|null $precovenda
 * @property Carbon|null $data_ultimavenda
 * @property float|null $estoque
 * @property float|null $estoqueminimo
 * @property string|null $codaliquota
 * @property string|null $aplicacao
 * @property string|null $localicazao
 * @property float|null $peso
 * @property string|null $validade
 * @property float|null $comissao
 * @property int|null $usa_balanca
 * @property int|null $usa_serial
 * @property int|null $usa_grade
 * @property string|null $codreceita
 * @property string|null $foto
 * @property Carbon|null $data_ultimacompra_anterior
 * @property string|null $notafiscal_anterior
 * @property string|null $codfornecedor_anterior
 * @property float|null $precocusto_anterior
 * @property float|null $precovenda_anterior
 * @property float|null $customedio
 * @property string|null $auto_aplicacao
 * @property string|null $auto_complemento
 * @property Carbon|null $data_remarcacao_custo
 * @property Carbon|null $data_remarcacao_venda
 * @property float|null $preco_promocao
 * @property Carbon|null $data_promocao
 * @property Carbon|null $fim_promocao
 * @property string|null $cst
 * @property string|null $classificacao_fiscal
 * @property string|null $nbm
 * @property string|null $ncm
 * @property float|null $aliquota
 * @property float|null $ipi
 * @property float|null $reducao
 * @property float|null $qtde_embalagem
 * @property string|null $tipo
 * @property float|null $peso_liquido
 * @property string|null $farmacia_controlado
 * @property int|null $farmacia_apresentacao
 * @property string|null $farmacia_registro_medicamento
 * @property float|null $farmacia_pmc
 * @property Carbon|null $ultima_alteracao
 * @property Carbon|null $ultima_carga
 * @property Carbon|null $data_inventario
 * @property float|null $custo_inventario
 * @property float|null $estoque_inventario
 * @property float|null $estoque_anterior
 * @property float|null $precovenda_novo
 * @property int|null $usa_rentabilidade
 * @property float|null $quantidade_minima_fab
 * @property string|null $apresentacao
 * @property int|null $situacao
 * @property float|null $precovenda1
 * @property float|null $precovenda2
 * @property float|null $precovenda3
 * @property float|null $precovenda4
 * @property float|null $precovenda5
 * @property float|null $desconto_precovenda
 * @property Carbon|null $data_inventario_atual
 * @property float|null $custo_inventario_atual
 * @property float|null $estoque_inventario_atual
 * @property float|null $margem_minima
 * @property string|null $piscofins
 * @property string|null $referencia_fornecedor
 * @property float|null $comissao1
 * @property float|null $margem_desconto
 * @property string|null $tamanho
 * @property string|null $cor
 * @property string|null $incidencia_piscofins
 * @property string|null $veic_chassi
 * @property string|null $veic_serie
 * @property string|null $veic_potencia
 * @property string|null $veic_peso_liquido
 * @property string|null $veic_peso_bruto
 * @property string|null $veic_tipo_combustivel
 * @property string|null $veic_renavam
 * @property int|null $veic_ano_fabricacao
 * @property int|null $veic_ano_modelo
 * @property string|null $veic_tipo
 * @property string|null $veic_tipo_pintura
 * @property string|null $veic_cod_cor
 * @property string|null $veic_cor
 * @property string|null $veic_vin
 * @property string|null $veic_numero_motor
 * @property string|null $veic_cmkg
 * @property string|null $veic_cm3
 * @property string|null $veic_distancia_eixo
 * @property string|null $veic_cod_marca
 * @property string|null $veic_especie
 * @property string|null $veic_condicao
 * @property string|null $lote_fabricacao
 * @property Carbon|null $lote_validade
 * @property float|null $margem_agregada
 * @property string|null $codbarra_novartis
 * @property string|null $farmacia_dcb
 * @property string|null $farmacia_abcfarma
 * @property string|null $farmacia_apresentacao_caixa
 * @property string|null $farmacia_principioativo
 * @property Carbon|null $ultima_compra
 * @property Carbon|null $farmacia_datavigencia
 * @property string|null $farmacia_tipo
 * @property string|null $usa_combustivel
 * @property string|null $referencia
 * @property float|null $perda
 * @property string|null $composicao1
 * @property string|null $composicao2
 * @property string|null $iat
 * @property string|null $ippt
 * @property string|null $situacao_tributaria
 * @property string|null $flag_sis
 * @property string|null $flag_aceito
 * @property string|null $flag_est
 * @property string|null $csosn
 * @property string|null $codoriginal
 * @property float|null $custo_atacado
 * @property string|null $unidade_atacado
 * @property float|null $qtde_embalagematacado
 * @property float|null $pmargem1
 * @property float|null $pmargem2
 * @property float|null $pmargem3
 * @property float|null $pmargem4
 * @property float|null $pmargem5
 * @property float|null $pmargematacado1
 * @property float|null $pmargematacado2
 * @property float|null $pmargematacado3
 * @property float|null $pmargematacado4
 * @property float|null $pmargematacado5
 * @property float|null $pmargematacado6
 * @property float|null $precoatacado1
 * @property float|null $precoatacado2
 * @property float|null $precoatacado3
 * @property float|null $precoatacado4
 * @property float|null $precoatacado5
 * @property string|null $ind_cfop
 * @property string|null $cfop_desc
 * @property int|null $usa_lote
 * @property string|null $ind_cfop_venda_dentro
 * @property string|null $codconta
 * @property string|null $ind_cfop_venda_fora
 * @property string|null $ind_cfop_devolucao_dentro
 * @property string|null $ind_cfop_devolucao_fora
 * @property string|null $ind_cfop_garantia_dentro
 * @property string|null $ind_cfop_garantia_fora
 * @property string|null $usa_tb_pc
 * @property string|null $ativa
 * @property string|null $cest
 * @property string|null $codgen
 * @property int|null $imobilizado
 * @property float|null $max_desconto
 * @property string|null $codorigem
 * @property string|null $indice_pis
 * @property string|null $indice_cofins
 * @property int|null $codigo_tributacao
 * @property float|null $aliquota_st
 * @property float|null $pfcp
 * @property float|null $pfcpst
 * @property float|null $vtroco
 * @property float|null $aliquita_credsn
 * @property string|null $cst_pis
 * @property string|null $cst_cofins
 * @property string|null $ind_cfop_nfce
 * @property string|null $pesagem_auotmatica
 * @property string|null $nao_movimenta_estoque
 * @property string|null $informa_codigo_barra_xml
 * @property string|null $codigo_anp
 * @property int|null $origem
 * @property string|null $fotobd
 * @property int|null $id_tipo_servico
 * @property string|null $codbalanca
 * @property string|null $codloja
 * @property string|null $combo
 * @property string|null $ind_cfop_dev_compra_dentro
 * @property string|null $ind_cfop_dev_compra_fora
 * @property string|null $pizza
 * @property float|null $percglnn
 * @property float|null $percglgni
 * @property float|null $pglp
 * @property float|null $vpart
 * @property string|null $ecf_icms
 * @property int|null $idonline
 * @property Carbon|null $datamov
 * @property int|null $tela_painel
 * @property int $codempresa
 * @property int|null $vasilhame
 * @property string|null $cod_part
 * @property int|null $ind_prop
 * @property string|null $decr_anp
 * @property float|null $aliquotanp
 * @property string|null $ufanp
 * @property string|null $codif
 * @property int|null $fifo
 * @property int|null $justdesonera
 * @property int $id
 * @property Carbon|null $updated_at
 * @property Carbon|null $created_at
 * 
 * @property Collection|ConversaoUnidade[] $conversao_unidades
 * @property Collection|Tanque[] $tanques
 *
 * @package App\Models
 */
class C000025 extends Model
{
	protected $table = 'c000025';
	protected $primaryKey = 'codigo';
	public $incrementing = false;

	protected $casts = [
		'data_cadastro' => 'datetime',
		'data_ultimacompra' => 'datetime',
		'precocusto' => 'float',
		'precovenda' => 'float',
		'data_ultimavenda' => 'datetime',
		'estoque' => 'float',
		'estoqueminimo' => 'float',
		'peso' => 'float',
		'comissao' => 'float',
		'usa_balanca' => 'int',
		'usa_serial' => 'int',
		'usa_grade' => 'int',
		'data_ultimacompra_anterior' => 'datetime',
		'precocusto_anterior' => 'float',
		'precovenda_anterior' => 'float',
		'customedio' => 'float',
		'data_remarcacao_custo' => 'datetime',
		'data_remarcacao_venda' => 'datetime',
		'preco_promocao' => 'float',
		'data_promocao' => 'datetime',
		'fim_promocao' => 'datetime',
		'aliquota' => 'float',
		'ipi' => 'float',
		'reducao' => 'float',
		'qtde_embalagem' => 'float',
		'peso_liquido' => 'float',
		'farmacia_apresentacao' => 'int',
		'farmacia_pmc' => 'float',
		'ultima_alteracao' => 'datetime',
		'ultima_carga' => 'datetime',
		'data_inventario' => 'datetime',
		'custo_inventario' => 'float',
		'estoque_inventario' => 'float',
		'estoque_anterior' => 'float',
		'precovenda_novo' => 'float',
		'usa_rentabilidade' => 'int',
		'quantidade_minima_fab' => 'float',
		'situacao' => 'int',
		'precovenda1' => 'float',
		'precovenda2' => 'float',
		'precovenda3' => 'float',
		'precovenda4' => 'float',
		'precovenda5' => 'float',
		'desconto_precovenda' => 'float',
		'data_inventario_atual' => 'datetime',
		'custo_inventario_atual' => 'float',
		'estoque_inventario_atual' => 'float',
		'margem_minima' => 'float',
		'comissao1' => 'float',
		'margem_desconto' => 'float',
		'veic_ano_fabricacao' => 'int',
		'veic_ano_modelo' => 'int',
		'lote_validade' => 'datetime',
		'margem_agregada' => 'float',
		'ultima_compra' => 'datetime',
		'farmacia_datavigencia' => 'datetime',
		'perda' => 'float',
		'custo_atacado' => 'float',
		'qtde_embalagematacado' => 'float',
		'pmargem1' => 'float',
		'pmargem2' => 'float',
		'pmargem3' => 'float',
		'pmargem4' => 'float',
		'pmargem5' => 'float',
		'pmargematacado1' => 'float',
		'pmargematacado2' => 'float',
		'pmargematacado3' => 'float',
		'pmargematacado4' => 'float',
		'pmargematacado5' => 'float',
		'pmargematacado6' => 'float',
		'precoatacado1' => 'float',
		'precoatacado2' => 'float',
		'precoatacado3' => 'float',
		'precoatacado4' => 'float',
		'precoatacado5' => 'float',
		'usa_lote' => 'int',
		'imobilizado' => 'int',
		'max_desconto' => 'float',
		'codigo_tributacao' => 'int',
		'aliquota_st' => 'float',
		'pfcp' => 'float',
		'pfcpst' => 'float',
		'vtroco' => 'float',
		'aliquita_credsn' => 'float',
		'origem' => 'int',
		'id_tipo_servico' => 'int',
		'percglnn' => 'float',
		'percglgni' => 'float',
		'pglp' => 'float',
		'vpart' => 'float',
		'idonline' => 'int',
		'datamov' => 'datetime',
		'tela_painel' => 'int',
		'codempresa' => 'int',
		'vasilhame' => 'int',
		'ind_prop' => 'int',
		'aliquotanp' => 'float',
		'fifo' => 'int',
		'justdesonera' => 'int',
		'id' => 'int'
	];

	protected $fillable = [
		'codbarra',
		'produto',
		'unidade',
		'data_cadastro',
		'codgrupo',
		'codsubgrupo',
		'codfornecedor',
		'codmarca',
		'data_ultimacompra',
		'notafiscal',
		'precocusto',
		'precovenda',
		'data_ultimavenda',
		'estoque',
		'estoqueminimo',
		'codaliquota',
		'aplicacao',
		'localicazao',
		'peso',
		'validade',
		'comissao',
		'usa_balanca',
		'usa_serial',
		'usa_grade',
		'codreceita',
		'foto',
		'data_ultimacompra_anterior',
		'notafiscal_anterior',
		'codfornecedor_anterior',
		'precocusto_anterior',
		'precovenda_anterior',
		'customedio',
		'auto_aplicacao',
		'auto_complemento',
		'data_remarcacao_custo',
		'data_remarcacao_venda',
		'preco_promocao',
		'data_promocao',
		'fim_promocao',
		'cst',
		'classificacao_fiscal',
		'nbm',
		'ncm',
		'aliquota',
		'ipi',
		'reducao',
		'qtde_embalagem',
		'tipo',
		'peso_liquido',
		'farmacia_controlado',
		'farmacia_apresentacao',
		'farmacia_registro_medicamento',
		'farmacia_pmc',
		'ultima_alteracao',
		'ultima_carga',
		'data_inventario',
		'custo_inventario',
		'estoque_inventario',
		'estoque_anterior',
		'precovenda_novo',
		'usa_rentabilidade',
		'quantidade_minima_fab',
		'apresentacao',
		'situacao',
		'precovenda1',
		'precovenda2',
		'precovenda3',
		'precovenda4',
		'precovenda5',
		'desconto_precovenda',
		'data_inventario_atual',
		'custo_inventario_atual',
		'estoque_inventario_atual',
		'margem_minima',
		'piscofins',
		'referencia_fornecedor',
		'comissao1',
		'margem_desconto',
		'tamanho',
		'cor',
		'incidencia_piscofins',
		'veic_chassi',
		'veic_serie',
		'veic_potencia',
		'veic_peso_liquido',
		'veic_peso_bruto',
		'veic_tipo_combustivel',
		'veic_renavam',
		'veic_ano_fabricacao',
		'veic_ano_modelo',
		'veic_tipo',
		'veic_tipo_pintura',
		'veic_cod_cor',
		'veic_cor',
		'veic_vin',
		'veic_numero_motor',
		'veic_cmkg',
		'veic_cm3',
		'veic_distancia_eixo',
		'veic_cod_marca',
		'veic_especie',
		'veic_condicao',
		'lote_fabricacao',
		'lote_validade',
		'margem_agregada',
		'codbarra_novartis',
		'farmacia_dcb',
		'farmacia_abcfarma',
		'farmacia_apresentacao_caixa',
		'farmacia_principioativo',
		'ultima_compra',
		'farmacia_datavigencia',
		'farmacia_tipo',
		'usa_combustivel',
		'referencia',
		'perda',
		'composicao1',
		'composicao2',
		'iat',
		'ippt',
		'situacao_tributaria',
		'flag_sis',
		'flag_aceito',
		'flag_est',
		'csosn',
		'codoriginal',
		'custo_atacado',
		'unidade_atacado',
		'qtde_embalagematacado',
		'pmargem1',
		'pmargem2',
		'pmargem3',
		'pmargem4',
		'pmargem5',
		'pmargematacado1',
		'pmargematacado2',
		'pmargematacado3',
		'pmargematacado4',
		'pmargematacado5',
		'pmargematacado6',
		'precoatacado1',
		'precoatacado2',
		'precoatacado3',
		'precoatacado4',
		'precoatacado5',
		'ind_cfop',
		'cfop_desc',
		'usa_lote',
		'ind_cfop_venda_dentro',
		'codconta',
		'ind_cfop_venda_fora',
		'ind_cfop_devolucao_dentro',
		'ind_cfop_devolucao_fora',
		'ind_cfop_garantia_dentro',
		'ind_cfop_garantia_fora',
		'usa_tb_pc',
		'ativa',
		'cest',
		'codgen',
		'imobilizado',
		'max_desconto',
		'codorigem',
		'indice_pis',
		'indice_cofins',
		'codigo_tributacao',
		'aliquota_st',
		'pfcp',
		'pfcpst',
		'vtroco',
		'aliquita_credsn',
		'cst_pis',
		'cst_cofins',
		'ind_cfop_nfce',
		'pesagem_auotmatica',
		'nao_movimenta_estoque',
		'informa_codigo_barra_xml',
		'codigo_anp',
		'origem',
		'fotobd',
		'id_tipo_servico',
		'codbalanca',
		'codloja',
		'combo',
		'ind_cfop_dev_compra_dentro',
		'ind_cfop_dev_compra_fora',
		'pizza',
		'percglnn',
		'percglgni',
		'pglp',
		'vpart',
		'ecf_icms',
		'idonline',
		'datamov',
		'tela_painel',
		'codempresa',
		'vasilhame',
		'cod_part',
		'ind_prop',
		'decr_anp',
		'aliquotanp',
		'ufanp',
		'codif',
		'fifo',
		'justdesonera',
		'id'
	];

	public function conversao_unidades()
	{
		return $this->hasMany(ConversaoUnidade::class, 'codproduto');
	}

	public function tanques()
	{
		return $this->hasMany(Tanque::class, 'cod_prd');
	}
}
