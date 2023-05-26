<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000001
 * 
 * @property string $codigo
 * @property Carbon|null $ultimo_backup
 * @property string|null $papel_parede
 * @property int|null $aviso_contas_pagar
 * @property int|null $aviso_cheque
 * @property int|null $estoque_negativo
 * @property int|null $casas_decimais_qtde
 * @property int|null $casas_decimais_valor
 * @property int|null $venda_cadastro_cheque
 * @property int|null $venda_cadastro_cartao
 * @property int|null $venda_tiponota
 * @property int|null $venda_qtde_vias_nota
 * @property string|null $venda_porta_impressora
 * @property int|null $venda_tipo_impressora
 * @property int|null $venda_limite_cliente
 * @property int|null $os_tiponota
 * @property int|null $os_qtde_vias_nota
 * @property string|null $os_porta_impressora
 * @property int|null $os_tipo_impressora
 * @property int|null $orcamento_tiponota
 * @property int|null $orcamento_qtde_vias_nota
 * @property string|null $orcamento_porta_impressora
 * @property int|null $orcamento_tipo_impressora
 * @property int|null $contasreceber_carencia
 * @property float|null $contasreceber_taxajuros
 * @property float|null $contasreceber_multa
 * @property float|null $contasreceber_desconto_percent
 * @property int|null $contasreceber_desconto_permitir
 * @property string|null $ecf_modelo
 * @property string|null $ecf_porta
 * @property int|null $ecf_tef
 * @property string|null $ecf_tipo
 * @property string|null $balancapdv_modelo
 * @property string|null $balancapdv_porta
 * @property string|null $impressoracheque_modelo
 * @property string|null $impressoracheque_porta
 * @property string|null $balanca_modelo
 * @property string|null $impressorabarras_modelo
 * @property string|null $balanca_caminho
 * @property string|null $cadastro_produto
 * @property int|null $ramo_atividade
 * @property int|null $extrato_tiponota
 * @property int|null $bobina_subirpapel
 * @property string|null $classificacao
 * @property string|null $boleto_formapgto
 * @property string|null $plano_venda_av
 * @property string|null $plano_venda_ap
 * @property string|null $plano_os_av
 * @property string|null $plano_os_ap
 * @property string|null $plano_outras_entradas
 * @property string|null $plano_outras_saidas
 * @property string|null $plano_recebto_crediario
 * @property int|null $nf_itens_pagina
 * @property int|null $nf_itens_transporte
 * @property int|null $nf_linha_transporte
 * @property int|null $nf_salto_pagina
 * @property int|null $nf_tipo
 * @property string|null $nf_impressora
 * @property int|null $venda_fechamento_caixa
 * @property float|null $desconto_avista
 * @property float|null $desconto_produto
 * @property float|null $desconto_totalnota
 * @property string|null $tipo_venda
 * @property int|null $venda_alterar_preco
 * @property int|null $nf_linha_subtotal
 * @property int|null $nf_linha_total
 * @property string|null $ecf_caixa
 * @property string|null $ecf_serial
 * @property string|null $farmacia_envio
 * @property string|null $farmacia_resposta
 * @property string|null $farmacia_envio_resposta
 * @property string|null $farmacia_login
 * @property string|null $farmacia_senha
 * @property Carbon|null $ultima_carga
 * @property int|null $imprime_cupom_vinculado
 * @property int|null $imprime_produtos_vinculados
 * @property int|null $imprime_comprovante_debito
 * @property int|null $imprime_duplicata
 * @property int|null $contasreceber_bloqueio
 * @property int|null $recibo_tiponota
 * @property string|null $nr_controle_ecf
 * @property string|null $balanca_programa
 * @property string|null $tipo_duplicata
 * @property int|null $concilia_venda
 * @property int|null $controla_entrega
 * @property int|null $entrega_impressao
 * @property int|null $entrega_vias
 * @property int|null $condicional
 * @property int|null $condicional_prazo
 * @property int|null $vs_ativar
 * @property int|null $vs_dinheiro
 * @property int|null $vs_chequeav
 * @property int|null $vs_chequeap
 * @property int|null $vs_cartraocred
 * @property int|null $vs_cartaodeb
 * @property int|null $vs_crediario
 * @property string|null $vs_cliente_vista
 * @property int|null $vs_caixa
 * @property int|null $vs_relatorio
 * @property int|null $vs_vias
 * @property int|null $vs_visualizar
 * @property int|null $condicional_modelo
 * @property int|null $alterar_unitario
 * @property float|null $contasreceber_valorjuros
 * @property int|null $contasreceber_juros_dinheiro
 * @property string|null $plano_duplicata_nfe
 * @property int|null $varejo_atacado
 * @property int|null $visualiza_mensagem
 * @property int|null $serial_repetido
 * @property int|null $ocultar_custo
 * @property int|null $ocultar_produto_inativo
 * @property int|null $ocultar_cliente_inativo
 * @property int|null $obs_farma
 * @property string|null $obs_farma_texto
 * @property int|null $custo_maior_venda
 * @property int|null $vender_abaixo_custo
 * @property int|null $nf_gerar_receber
 * @property int|null $nf_codigobarra_nfe
 * @property int|null $nf_grade_nfe
 * @property int|null $nf_serial_nfe
 * @property int|null $nf_referencia_nfe
 * @property int|null $nf_gerar_duplicata
 * @property int|null $vale_caixa
 * @property int|null $contas_receber_bloqueio
 * @property int|null $cupom_imprimir_codigo
 * @property int|null $cliente_pede_cpf
 * @property int|null $verifica_cod_barra
 * @property int|null $verifica_nome_produto
 * @property int|null $vs_frete
 * @property int|null $inventario_automatico
 * @property int|null $baixar_estoque_nota_saida
 * @property int|null $etiqueta_07
 * @property int|null $etiqueta_07_1
 * @property int|null $etiqueta_07_2
 * @property string|null $email_servidor_smtp
 * @property string|null $email_porta
 * @property string|null $email_usuario
 * @property string|null $email_senha
 * @property string|null $email_assunto
 * @property int|null $email_exige_conexao
 * @property string|null $email_mensagem
 * @property int|null $inestra
 * @property int|null $farmacia_inventario_fecha
 * @property string|null $farmacia_envio_novartis
 * @property string|null $farmacia_resposta_novartis
 * @property string|null $farmacia_inventario_confirma
 * @property Carbon|null $farmacia_inventario_data
 * @property int|null $calcula_isentas_outras
 * @property int|null $usa_rentabilidade
 * @property int|null $usa_produtor_rural
 * @property string|null $ind_clie_entrada
 * @property string|null $ind_cfop_entrada
 * @property string|null $ind_clie_saida
 * @property string|null $ind_cfop_saida
 * @property string|null $ind_clie_perda
 * @property string|null $ind_cfop_perda
 * @property int|null $ind_mostra_composicao
 * @property int|null $checa_serial_nota_saida
 * @property string|null $cor_comercio
 * @property string|null $logo_comercio
 * @property string|null $cor_farmacia
 * @property string|null $logo_farmacia
 * @property string|null $cor_pecas
 * @property string|null $logo_pecas
 * @property string|null $cor_mercado
 * @property string|null $logo_mercado
 * @property string|null $cor_posto
 * @property string|null $logo_posto
 * @property string|null $ind_clie_entrada_desc
 * @property string|null $ind_cfop_entrada_desc
 * @property string|null $ind_clie_saida_desc
 * @property string|null $ind_cfop_saida_desc
 * @property string|null $ind_clie_perda_desc
 * @property string|null $ind_cfop_perda_desc
 * @property string|null $ind_cfop_venda_dentro
 * @property string|null $ind_cfop_venda_fora
 * @property string|null $ind_cfop_devolucao_dentro
 * @property string|null $ind_cfop_devolucao_fora
 * @property string|null $ind_cfop_servico_dentro
 * @property string|null $ind_cfop_servico_fora
 * @property string|null $cfop_venda_dentro_desc
 * @property string|null $cfop_venda_fora_desc
 * @property string|null $cfop_devolucao_dentro_desc
 * @property string|null $cfop_devolucao_fora_desc
 * @property string|null $cfop_servico_dentro_desc
 * @property string|null $cfop_servico_fora_desc
 * @property int|null $tipo_nf
 * @property string|null $cor_estoque_positivo
 * @property string|null $cor_estoque_negativo
 * @property string|null $cor_estoque_zerado
 * @property int|null $tipo_pesquisa
 * @property int|null $ecf_concomitante
 * @property string|null $plano_pagto_forn
 * @property int|null $hab_prevenda
 * @property string|null $codclienteav
 * @property string|null $codclientemodelo
 * @property string|null $codprodutomodelo
 * @property string|null $codfornecedormodelo
 * @property int|null $usa_caixa_diario
 * @property int|null $imprimi_orcamento_auto
 * @property int|null $fixa_forma_pgto_cliente
 * @property string|null $versaobd
 * @property int|null $usa_caixa_padrao_usuario
 * @property string|null $texto_padrao_venda
 * @property string|null $texto_padrao_devolucao
 * @property string|null $texto_padrao_garantia
 * @property int|null $avisa_estoque_minimo
 * @property int|null $lanc_aut_prod
 * @property int|null $devolucao_pede_senha
 * @property int|null $balanca_digitos_codigo
 * @property int|null $balanca_gera_preco
 * @property int|null $balanca_pesquisa_codbarra
 * @property int|null $identificar_vendedor
 * @property int|null $os_oficina
 * @property int|null $excluir_orcamento
 * @property int|null $colunas_impressora
 * @property int|null $comissao_detalhada
 * @property int|null $habilitar_campos_fiscais
 * @property int|null $orcamento_expresso
 * @property int|null $utiliza_restaurante
 * @property int|null $usa_cartao_fidelidade
 * @property int|null $previsualizar
 * @property string|null $max_emitente
 * @property string|null $diretorio_boletos
 * @property string|null $atendimentoficha
 * @property string|null $atendimentoimpressao
 * @property string|null $atendimentoimpressora
 * @property string|null $cobra_couver
 * @property string|null $nao_sol_senha_mov_estoque
 * @property string|null $permite_prod_preco_zero
 * @property string|null $pesquisar_placa_os
 * @property string|null $produto_taxa_entrega
 * @property string|null $utiliza_leitor_codigo_barra
 * @property string|null $cobra_comissao
 * @property string|null $xml_cfop_venda_dentro
 * @property string|null $xml_cfop_venda_fora
 * @property string|null $xml_cfop_devol_dentro
 * @property string|null $xml_cfop_devol_fora
 * @property string|null $xml_tipo
 * @property string|null $xml_cst
 * @property string|null $xml_csosn
 * @property string|null $xml_situacao_tributaria
 * @property string|null $nao_exibe_fech_atend
 * @property string|null $nao_informa_cli_atend
 * @property string|null $nao_utiliza_extra
 * @property string|null $ativa_cad_produto_simples
 * @property string|null $ativa_campo_pedido_cliente
 * @property float|null $acrescimo_produto
 * @property int|null $id_cliente
 * @property int|null $atendimentoimpresmodelo
 * @property int|null $atendimentovias
 * @property string|null $carta_cobranca_texto
 * @property float|null $comissao_percentual
 * @property int|null $qtd_mesas_mobile
 * @property int|null $tip_imp_delivery
 * @property Carbon|null $ultimaverificaoxml
 * @property float|null $valor_couver
 * @property string|null $v_ata_bot_cor_fonte
 * @property string|null $v_ata_exibe_resumo_caixa
 * @property float|null $xml_aliquota
 * @property string|null $v_exibe_barra_atalho
 * @property string|null $plano_conta1
 * @property string|null $plano_conta10
 * @property string|null $plano_conta2
 * @property string|null $plano_conta20
 * @property string|null $plano_conta80
 * @property string|null $plano_conta8
 * @property string|null $plano_conta30
 * @property string|null $plano_conta3
 * @property string|null $plano_conta40
 * @property string|null $plano_conta4
 * @property string|null $plano_conta50
 * @property string|null $plano_conta5
 * @property string|null $plano_conta60
 * @property string|null $plano_conta6
 * @property string|null $plano_conta7
 * @property string|null $plano_conta70
 * @property string|null $v_cor_fundo_barra_titulo
 * @property string|null $v_cor_fonte_barra_titulo
 * @property string|null $v_cor_fundo_barra_rodape
 * @property string|null $v_cor_fonte_barra_rodape
 * @property string|null $v_men_cad_fundo
 * @property string|null $v_men_cad_fonte
 * @property string|null $v_men_est_fundo
 * @property string|null $v_men_est_fonte
 * @property string|null $v_men_mov_fundo
 * @property string|null $v_men_mov_fonte
 * @property string|null $v_men_fin_fundo
 * @property string|null $v_men_fin_fonte
 * @property string|null $v_men_rel_fundo
 * @property string|null $v_men_rel_fonte
 * @property string|null $v_men_con_fundo
 * @property string|null $v_men_con_fonte
 * @property string|null $v_imagem_fundo
 * @property string|null $v_ata_bot_cor_fundo
 * @property string|null $v_ata_exibe_imagem
 * @property string|null $v_ata_caixa_cor_fundo
 * @property string|null $v_ata_caixa_cor_fonte
 * @property string|null $email_tls
 * @property string|null $email_ssl
 * @property string|null $cep_busca
 * @property int|null $cep_servidor
 * @property string|null $cep_chave
 * @property string|null $ind_cfop_dev_compra_dentro
 * @property string|null $ind_cfop_dev_compra_fora
 * @property string|null $ind_cfop_garantia_dentro
 * @property string|null $ind_cfop_garantia_fora
 * @property string|null $ind_cfop_dev_compra_dentro_desc
 * @property string|null $ind_cfop_dev_compra_fora_desc
 * @property string|null $ind_cfop_garantia_dentro_desc
 * @property string|null $ind_cfop_garantia_fora_desc
 * @property string|null $iniciar_nova_venda
 * @property string|null $novo_ramo_atividade
 * @property string|null $validar_caixa_atendimento
 * @property string|null $atualiza_estoque_pdv
 * @property string|null $baixa_estoque_venda_simples
 * @property int|null $dias_val_cupom_credito
 * @property int|null $dias_validade_cupom_credito
 * @property string|null $vendas_simples_nao_mov_caixa
 * @property string|null $taxa_garcom_tipo_receb
 * @property string|null $couver_tipo_receb
 * @property string|null $couver_produto
 * @property string|null $taxa_garcom_produto
 * @property int|null $tip_imp_comanda
 * @property string|null $nao_solicita_excluir_item_nfe
 * @property string|null $caixa_automatico_gerencial
 * @property string|null $permitir_senhas_obvias
 * @property string|null $b2b_xml_produto
 * @property string|null $tipo_etiqueta_balanca
 * @property string|null $pode_alt_vlr_unit_atend
 * @property string|null $path_remessa
 * @property string|null $path_retorno
 * @property string|null $path_gerarpdf
 * @property string|null $assunto_email
 * @property string|null $mensagem_email
 * @property string|null $multiloja
 * @property int|null $envia_sintegra_contador
 * @property int|null $envia_relatorio_vendas
 * @property int|null $envia_relacao_xml
 * @property int|null $envia_livros_fiscais
 * @property int|null $envia_arquivos_xml
 * @property int|null $arquivos_xml_separados_mes
 * @property string|null $path_arquivos_xml_nfe
 * @property string|null $path_arquivos_xml_nfce
 * @property int|null $dt_venda_ped
 * @property int $id
 * @property int $codempresa
 * @property string|null $versao_base
 * @property int|null $usa_peps
 * @property int|null $vincula_pix_banco
 *
 * @package App\Models
 */
class C000001 extends Model
{
	protected $table = 'c000001';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ultimo_backup' => 'datetime',
		'aviso_contas_pagar' => 'int',
		'aviso_cheque' => 'int',
		'estoque_negativo' => 'int',
		'casas_decimais_qtde' => 'int',
		'casas_decimais_valor' => 'int',
		'venda_cadastro_cheque' => 'int',
		'venda_cadastro_cartao' => 'int',
		'venda_tiponota' => 'int',
		'venda_qtde_vias_nota' => 'int',
		'venda_tipo_impressora' => 'int',
		'venda_limite_cliente' => 'int',
		'os_tiponota' => 'int',
		'os_qtde_vias_nota' => 'int',
		'os_tipo_impressora' => 'int',
		'orcamento_tiponota' => 'int',
		'orcamento_qtde_vias_nota' => 'int',
		'orcamento_tipo_impressora' => 'int',
		'contasreceber_carencia' => 'int',
		'contasreceber_taxajuros' => 'float',
		'contasreceber_multa' => 'float',
		'contasreceber_desconto_percent' => 'float',
		'contasreceber_desconto_permitir' => 'int',
		'ecf_tef' => 'int',
		'ramo_atividade' => 'int',
		'extrato_tiponota' => 'int',
		'bobina_subirpapel' => 'int',
		'nf_itens_pagina' => 'int',
		'nf_itens_transporte' => 'int',
		'nf_linha_transporte' => 'int',
		'nf_salto_pagina' => 'int',
		'nf_tipo' => 'int',
		'venda_fechamento_caixa' => 'int',
		'desconto_avista' => 'float',
		'desconto_produto' => 'float',
		'desconto_totalnota' => 'float',
		'venda_alterar_preco' => 'int',
		'nf_linha_subtotal' => 'int',
		'nf_linha_total' => 'int',
		'ultima_carga' => 'datetime',
		'imprime_cupom_vinculado' => 'int',
		'imprime_produtos_vinculados' => 'int',
		'imprime_comprovante_debito' => 'int',
		'imprime_duplicata' => 'int',
		'contasreceber_bloqueio' => 'int',
		'recibo_tiponota' => 'int',
		'concilia_venda' => 'int',
		'controla_entrega' => 'int',
		'entrega_impressao' => 'int',
		'entrega_vias' => 'int',
		'condicional' => 'int',
		'condicional_prazo' => 'int',
		'vs_ativar' => 'int',
		'vs_dinheiro' => 'int',
		'vs_chequeav' => 'int',
		'vs_chequeap' => 'int',
		'vs_cartraocred' => 'int',
		'vs_cartaodeb' => 'int',
		'vs_crediario' => 'int',
		'vs_caixa' => 'int',
		'vs_relatorio' => 'int',
		'vs_vias' => 'int',
		'vs_visualizar' => 'int',
		'condicional_modelo' => 'int',
		'alterar_unitario' => 'int',
		'contasreceber_valorjuros' => 'float',
		'contasreceber_juros_dinheiro' => 'int',
		'varejo_atacado' => 'int',
		'visualiza_mensagem' => 'int',
		'serial_repetido' => 'int',
		'ocultar_custo' => 'int',
		'ocultar_produto_inativo' => 'int',
		'ocultar_cliente_inativo' => 'int',
		'obs_farma' => 'int',
		'custo_maior_venda' => 'int',
		'vender_abaixo_custo' => 'int',
		'nf_gerar_receber' => 'int',
		'nf_codigobarra_nfe' => 'int',
		'nf_grade_nfe' => 'int',
		'nf_serial_nfe' => 'int',
		'nf_referencia_nfe' => 'int',
		'nf_gerar_duplicata' => 'int',
		'vale_caixa' => 'int',
		'contas_receber_bloqueio' => 'int',
		'cupom_imprimir_codigo' => 'int',
		'cliente_pede_cpf' => 'int',
		'verifica_cod_barra' => 'int',
		'verifica_nome_produto' => 'int',
		'vs_frete' => 'int',
		'inventario_automatico' => 'int',
		'baixar_estoque_nota_saida' => 'int',
		'etiqueta_07' => 'int',
		'etiqueta_07_1' => 'int',
		'etiqueta_07_2' => 'int',
		'email_exige_conexao' => 'int',
		'inestra' => 'int',
		'farmacia_inventario_fecha' => 'int',
		'farmacia_inventario_data' => 'datetime',
		'calcula_isentas_outras' => 'int',
		'usa_rentabilidade' => 'int',
		'usa_produtor_rural' => 'int',
		'ind_mostra_composicao' => 'int',
		'checa_serial_nota_saida' => 'int',
		'tipo_nf' => 'int',
		'tipo_pesquisa' => 'int',
		'ecf_concomitante' => 'int',
		'hab_prevenda' => 'int',
		'usa_caixa_diario' => 'int',
		'imprimi_orcamento_auto' => 'int',
		'fixa_forma_pgto_cliente' => 'int',
		'usa_caixa_padrao_usuario' => 'int',
		'avisa_estoque_minimo' => 'int',
		'lanc_aut_prod' => 'int',
		'devolucao_pede_senha' => 'int',
		'balanca_digitos_codigo' => 'int',
		'balanca_gera_preco' => 'int',
		'balanca_pesquisa_codbarra' => 'int',
		'identificar_vendedor' => 'int',
		'os_oficina' => 'int',
		'excluir_orcamento' => 'int',
		'colunas_impressora' => 'int',
		'comissao_detalhada' => 'int',
		'habilitar_campos_fiscais' => 'int',
		'orcamento_expresso' => 'int',
		'utiliza_restaurante' => 'int',
		'usa_cartao_fidelidade' => 'int',
		'previsualizar' => 'int',
		'acrescimo_produto' => 'float',
		'id_cliente' => 'int',
		'atendimentoimpresmodelo' => 'int',
		'atendimentovias' => 'int',
		'comissao_percentual' => 'float',
		'qtd_mesas_mobile' => 'int',
		'tip_imp_delivery' => 'int',
		'ultimaverificaoxml' => 'datetime',
		'valor_couver' => 'float',
		'xml_aliquota' => 'float',
		'cep_servidor' => 'int',
		'dias_val_cupom_credito' => 'int',
		'dias_validade_cupom_credito' => 'int',
		'tip_imp_comanda' => 'int',
		'envia_sintegra_contador' => 'int',
		'envia_relatorio_vendas' => 'int',
		'envia_relacao_xml' => 'int',
		'envia_livros_fiscais' => 'int',
		'envia_arquivos_xml' => 'int',
		'arquivos_xml_separados_mes' => 'int',
		'dt_venda_ped' => 'int',
		'id' => 'int',
		'codempresa' => 'int',
		'usa_peps' => 'int',
		'vincula_pix_banco' => 'int'
	];

	protected $fillable = [
		'ultimo_backup',
		'papel_parede',
		'aviso_contas_pagar',
		'aviso_cheque',
		'estoque_negativo',
		'casas_decimais_qtde',
		'casas_decimais_valor',
		'venda_cadastro_cheque',
		'venda_cadastro_cartao',
		'venda_tiponota',
		'venda_qtde_vias_nota',
		'venda_porta_impressora',
		'venda_tipo_impressora',
		'venda_limite_cliente',
		'os_tiponota',
		'os_qtde_vias_nota',
		'os_porta_impressora',
		'os_tipo_impressora',
		'orcamento_tiponota',
		'orcamento_qtde_vias_nota',
		'orcamento_porta_impressora',
		'orcamento_tipo_impressora',
		'contasreceber_carencia',
		'contasreceber_taxajuros',
		'contasreceber_multa',
		'contasreceber_desconto_percent',
		'contasreceber_desconto_permitir',
		'ecf_modelo',
		'ecf_porta',
		'ecf_tef',
		'ecf_tipo',
		'balancapdv_modelo',
		'balancapdv_porta',
		'impressoracheque_modelo',
		'impressoracheque_porta',
		'balanca_modelo',
		'impressorabarras_modelo',
		'balanca_caminho',
		'cadastro_produto',
		'ramo_atividade',
		'extrato_tiponota',
		'bobina_subirpapel',
		'classificacao',
		'boleto_formapgto',
		'plano_venda_av',
		'plano_venda_ap',
		'plano_os_av',
		'plano_os_ap',
		'plano_outras_entradas',
		'plano_outras_saidas',
		'plano_recebto_crediario',
		'nf_itens_pagina',
		'nf_itens_transporte',
		'nf_linha_transporte',
		'nf_salto_pagina',
		'nf_tipo',
		'nf_impressora',
		'venda_fechamento_caixa',
		'desconto_avista',
		'desconto_produto',
		'desconto_totalnota',
		'tipo_venda',
		'venda_alterar_preco',
		'nf_linha_subtotal',
		'nf_linha_total',
		'ecf_caixa',
		'ecf_serial',
		'farmacia_envio',
		'farmacia_resposta',
		'farmacia_envio_resposta',
		'farmacia_login',
		'farmacia_senha',
		'ultima_carga',
		'imprime_cupom_vinculado',
		'imprime_produtos_vinculados',
		'imprime_comprovante_debito',
		'imprime_duplicata',
		'contasreceber_bloqueio',
		'recibo_tiponota',
		'nr_controle_ecf',
		'balanca_programa',
		'tipo_duplicata',
		'concilia_venda',
		'controla_entrega',
		'entrega_impressao',
		'entrega_vias',
		'condicional',
		'condicional_prazo',
		'vs_ativar',
		'vs_dinheiro',
		'vs_chequeav',
		'vs_chequeap',
		'vs_cartraocred',
		'vs_cartaodeb',
		'vs_crediario',
		'vs_cliente_vista',
		'vs_caixa',
		'vs_relatorio',
		'vs_vias',
		'vs_visualizar',
		'condicional_modelo',
		'alterar_unitario',
		'contasreceber_valorjuros',
		'contasreceber_juros_dinheiro',
		'plano_duplicata_nfe',
		'varejo_atacado',
		'visualiza_mensagem',
		'serial_repetido',
		'ocultar_custo',
		'ocultar_produto_inativo',
		'ocultar_cliente_inativo',
		'obs_farma',
		'obs_farma_texto',
		'custo_maior_venda',
		'vender_abaixo_custo',
		'nf_gerar_receber',
		'nf_codigobarra_nfe',
		'nf_grade_nfe',
		'nf_serial_nfe',
		'nf_referencia_nfe',
		'nf_gerar_duplicata',
		'vale_caixa',
		'contas_receber_bloqueio',
		'cupom_imprimir_codigo',
		'cliente_pede_cpf',
		'verifica_cod_barra',
		'verifica_nome_produto',
		'vs_frete',
		'inventario_automatico',
		'baixar_estoque_nota_saida',
		'etiqueta_07',
		'etiqueta_07_1',
		'etiqueta_07_2',
		'email_servidor_smtp',
		'email_porta',
		'email_usuario',
		'email_senha',
		'email_assunto',
		'email_exige_conexao',
		'email_mensagem',
		'inestra',
		'farmacia_inventario_fecha',
		'farmacia_envio_novartis',
		'farmacia_resposta_novartis',
		'farmacia_inventario_confirma',
		'farmacia_inventario_data',
		'calcula_isentas_outras',
		'usa_rentabilidade',
		'usa_produtor_rural',
		'ind_clie_entrada',
		'ind_cfop_entrada',
		'ind_clie_saida',
		'ind_cfop_saida',
		'ind_clie_perda',
		'ind_cfop_perda',
		'ind_mostra_composicao',
		'checa_serial_nota_saida',
		'cor_comercio',
		'logo_comercio',
		'cor_farmacia',
		'logo_farmacia',
		'cor_pecas',
		'logo_pecas',
		'cor_mercado',
		'logo_mercado',
		'cor_posto',
		'logo_posto',
		'ind_clie_entrada_desc',
		'ind_cfop_entrada_desc',
		'ind_clie_saida_desc',
		'ind_cfop_saida_desc',
		'ind_clie_perda_desc',
		'ind_cfop_perda_desc',
		'ind_cfop_venda_dentro',
		'ind_cfop_venda_fora',
		'ind_cfop_devolucao_dentro',
		'ind_cfop_devolucao_fora',
		'ind_cfop_servico_dentro',
		'ind_cfop_servico_fora',
		'cfop_venda_dentro_desc',
		'cfop_venda_fora_desc',
		'cfop_devolucao_dentro_desc',
		'cfop_devolucao_fora_desc',
		'cfop_servico_dentro_desc',
		'cfop_servico_fora_desc',
		'tipo_nf',
		'cor_estoque_positivo',
		'cor_estoque_negativo',
		'cor_estoque_zerado',
		'tipo_pesquisa',
		'ecf_concomitante',
		'plano_pagto_forn',
		'hab_prevenda',
		'codclienteav',
		'codclientemodelo',
		'codprodutomodelo',
		'codfornecedormodelo',
		'usa_caixa_diario',
		'imprimi_orcamento_auto',
		'fixa_forma_pgto_cliente',
		'versaobd',
		'usa_caixa_padrao_usuario',
		'texto_padrao_venda',
		'texto_padrao_devolucao',
		'texto_padrao_garantia',
		'avisa_estoque_minimo',
		'lanc_aut_prod',
		'devolucao_pede_senha',
		'balanca_digitos_codigo',
		'balanca_gera_preco',
		'balanca_pesquisa_codbarra',
		'identificar_vendedor',
		'os_oficina',
		'excluir_orcamento',
		'colunas_impressora',
		'comissao_detalhada',
		'habilitar_campos_fiscais',
		'orcamento_expresso',
		'utiliza_restaurante',
		'usa_cartao_fidelidade',
		'previsualizar',
		'max_emitente',
		'diretorio_boletos',
		'atendimentoficha',
		'atendimentoimpressao',
		'atendimentoimpressora',
		'cobra_couver',
		'nao_sol_senha_mov_estoque',
		'permite_prod_preco_zero',
		'pesquisar_placa_os',
		'produto_taxa_entrega',
		'utiliza_leitor_codigo_barra',
		'cobra_comissao',
		'xml_cfop_venda_dentro',
		'xml_cfop_venda_fora',
		'xml_cfop_devol_dentro',
		'xml_cfop_devol_fora',
		'xml_tipo',
		'xml_cst',
		'xml_csosn',
		'xml_situacao_tributaria',
		'nao_exibe_fech_atend',
		'nao_informa_cli_atend',
		'nao_utiliza_extra',
		'ativa_cad_produto_simples',
		'ativa_campo_pedido_cliente',
		'acrescimo_produto',
		'id_cliente',
		'atendimentoimpresmodelo',
		'atendimentovias',
		'carta_cobranca_texto',
		'comissao_percentual',
		'qtd_mesas_mobile',
		'tip_imp_delivery',
		'ultimaverificaoxml',
		'valor_couver',
		'v_ata_bot_cor_fonte',
		'v_ata_exibe_resumo_caixa',
		'xml_aliquota',
		'v_exibe_barra_atalho',
		'plano_conta1',
		'plano_conta10',
		'plano_conta2',
		'plano_conta20',
		'plano_conta80',
		'plano_conta8',
		'plano_conta30',
		'plano_conta3',
		'plano_conta40',
		'plano_conta4',
		'plano_conta50',
		'plano_conta5',
		'plano_conta60',
		'plano_conta6',
		'plano_conta7',
		'plano_conta70',
		'v_cor_fundo_barra_titulo',
		'v_cor_fonte_barra_titulo',
		'v_cor_fundo_barra_rodape',
		'v_cor_fonte_barra_rodape',
		'v_men_cad_fundo',
		'v_men_cad_fonte',
		'v_men_est_fundo',
		'v_men_est_fonte',
		'v_men_mov_fundo',
		'v_men_mov_fonte',
		'v_men_fin_fundo',
		'v_men_fin_fonte',
		'v_men_rel_fundo',
		'v_men_rel_fonte',
		'v_men_con_fundo',
		'v_men_con_fonte',
		'v_imagem_fundo',
		'v_ata_bot_cor_fundo',
		'v_ata_exibe_imagem',
		'v_ata_caixa_cor_fundo',
		'v_ata_caixa_cor_fonte',
		'email_tls',
		'email_ssl',
		'cep_busca',
		'cep_servidor',
		'cep_chave',
		'ind_cfop_dev_compra_dentro',
		'ind_cfop_dev_compra_fora',
		'ind_cfop_garantia_dentro',
		'ind_cfop_garantia_fora',
		'ind_cfop_dev_compra_dentro_desc',
		'ind_cfop_dev_compra_fora_desc',
		'ind_cfop_garantia_dentro_desc',
		'ind_cfop_garantia_fora_desc',
		'iniciar_nova_venda',
		'novo_ramo_atividade',
		'validar_caixa_atendimento',
		'atualiza_estoque_pdv',
		'baixa_estoque_venda_simples',
		'dias_val_cupom_credito',
		'dias_validade_cupom_credito',
		'vendas_simples_nao_mov_caixa',
		'taxa_garcom_tipo_receb',
		'couver_tipo_receb',
		'couver_produto',
		'taxa_garcom_produto',
		'tip_imp_comanda',
		'nao_solicita_excluir_item_nfe',
		'caixa_automatico_gerencial',
		'permitir_senhas_obvias',
		'b2b_xml_produto',
		'tipo_etiqueta_balanca',
		'pode_alt_vlr_unit_atend',
		'path_remessa',
		'path_retorno',
		'path_gerarpdf',
		'assunto_email',
		'mensagem_email',
		'multiloja',
		'envia_sintegra_contador',
		'envia_relatorio_vendas',
		'envia_relacao_xml',
		'envia_livros_fiscais',
		'envia_arquivos_xml',
		'arquivos_xml_separados_mes',
		'path_arquivos_xml_nfe',
		'path_arquivos_xml_nfce',
		'dt_venda_ped',
		'id',
		'codempresa',
		'versao_base',
		'usa_peps',
		'vincula_pix_banco'
	];
}
