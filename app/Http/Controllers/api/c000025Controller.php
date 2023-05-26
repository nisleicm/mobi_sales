<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Json;
use App\Models\c000025;

class c000025Controller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prod = c000025::paginate(200);

        return response()->json($prod);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->data;

        foreach ($data as $item) {
               $prodData = [
                'codigo' => $item['codigo'],'codbarra' => $item['codbarra'],'produto' => $item['produto'],'unidade' => $item['unidade'],'data_cadastro' => $item['data_cadastro'],
'codgrupo' => $item['codgrupo'],'codsubgrupo' => $item['codsubgrupo'],'codfornecedor' => $item['codsubgrupo'],'codmarca' => $item['codmarca'],'data_ultimacompra' => $item['data_ultimacompra'],
'notafiscal' => $item['notafiscal'],'precocusto' => $item['precocusto'],'precovenda' => $item['precovenda'],'data_ultimavenda' => $item['data_ultimavenda'],'estoque' => $item['estoque'],
'estoqueminimo' => $item['estoqueminimo'],'codaliquota' => $item['codaliquota'],'aplicacao' => $item['aplicacao'],'localicazao' => $item['localicazao'],'peso' => $item['peso'],
'validade' => $item['validade'],'comissao' => $item['comissao'],'usa_balanca' => $item['usa_balanca'],'usa_serial' => $item['usa_serial'],'usa_grade' => $item['usa_grade'],
'codreceita' => $item['codreceita'],'foto' => $item['foto'],'data_ultimacompra_anterior' => $item['data_ultimacompra_anterior'],'notafiscal_anterior' => $item['notafiscal_anterior'],
'codfornecedor_anterior' => $item['codfornecedor_anterior'],'precocusto_anterior' => $item['precocusto_anterior'],'precovenda_anterior' => $item['precovenda_anterior'],
'customedio' => $item['customedio'],'auto_aplicacao' => $item['auto_aplicacao'],'auto_complemento' => $item['auto_complemento'],'data_remarcacao_custo' => $item['data_remarcacao_custo'],
'data_remarcacao_venda' => $item['data_remarcacao_venda'],'preco_promocao' => $item['preco_promocao'],'data_promocao' => $item['data_promocao'],'fim_promocao' => $item['fim_promocao'],
'cst' => $item['cst'],'classificacao_fiscal' => $item['classificacao_fiscal'],'nbm' => $item['nbm'],'ncm' => $item['ncm'],'aliquota' => $item['aliquota'],
'ipi' => $item['ipi'],'reducao' => $item['reducao'],'qtde_embalagem' => $item['qtde_embalagem'],'tipo' => $item['tipo'],'peso_liquido' => $item['peso_liquido'],
'farmacia_controlado' => $item['farmacia_controlado'],'farmacia_apresentacao' => $item['farmacia_apresentacao'],'farmacia_registro_medicamento' => $item['farmacia_registro_medicamento'],
'farmacia_pmc' => $item['farmacia_pmc'],'ultima_alteracao' => $item['ultima_alteracao'],'ultima_carga' => $item['ultima_carga'],'data_inventario' => $item['data_inventario'],
'custo_inventario' => $item['custo_inventario'],'estoque_inventario' => $item['estoque_inventario'],'estoque_anterior' => $item['estoque_anterior'],
'precovenda_novo' => $item['precovenda_novo'],'usa_rentabilidade' => $item['usa_rentabilidade'],'quantidade_minima_fab' => $item['quantidade_minima_fab'],
'apresentacao' => $item['apresentacao'],'situacao' => $item['situacao'],'precovenda1' => $item['precovenda1'],'precovenda2' => $item['precovenda2'],
'precovenda3' => $item['precovenda3'],'precovenda4' => $item['precovenda4'],'precovenda5' => $item['precovenda5'],'desconto_precovenda' => $item['desconto_precovenda'],
'data_inventario_atual' => $item['data_inventario_atual'],'custo_inventario_atual' => $item['custo_inventario_atual'],'estoque_inventario_atual' => $item['estoque_inventario_atual'],
'margem_minima' => $item['margem_minima'],'piscofins' => $item['piscofins'],'referencia_fornecedor' => $item['referencia_fornecedor'],'comissao1' => $item['comissao1'],
'margem_desconto' => $item['margem_desconto'],'tamanho' => $item['tamanho'],'cor' => $item['cor'],'incidencia_piscofins' => $item['incidencia_piscofins'],'veic_chassi' => $item['veic_chassi'],
'veic_serie' => $item['veic_serie'],'veic_potencia' => $item['veic_potencia'],'veic_peso_liquido' => $item['veic_peso_liquido'],
'veic_peso_bruto' => $item['veic_peso_bruto'],'veic_tipo_combustivel' => $item['veic_tipo_combustivel'],'veic_renavam' => $item['veic_renavam'],'veic_ano_fabricacao' => $item['veic_ano_fabricacao'],'veic_ano_modelo' => $item['veic_ano_modelo'],
'veic_tipo' => $item['veic_tipo'],'veic_tipo_pintura' => $item['veic_tipo_pintura'],'veic_cod_cor' => $item['veic_cod_cor'],'veic_cor' => $item['veic_cor'],'veic_vin' => $item['veic_vin'],
'veic_numero_motor' => $item['veic_numero_motor'],'veic_cmkg' => $item['veic_cmkg'],'veic_cm3' => $item['veic_cm3'],'veic_distancia_eixo' => $item['veic_distancia_eixo'],
'veic_cod_marca' => $item['veic_cod_marca'],'veic_especie' => $item['veic_especie'],'veic_condicao' => $item['veic_condicao'],'lote_fabricacao' => $item['lote_fabricacao'],'lote_validade' => $item['lote_validade'],'margem_agregada' => $item['margem_agregada'],
'codbarra_novartis' => $item['codbarra_novartis'],'farmacia_dcb' => $item['farmacia_dcb'],'farmacia_abcfarma' => $item['farmacia_abcfarma'],
'farmacia_apresentacao_caixa' => $item['farmacia_apresentacao_caixa'],'farmacia_principioativo' => $item['farmacia_principioativo'],'ultima_compra' => $item['ultima_compra'],'farmacia_datavigencia' => $item['farmacia_datavigencia'],'farmacia_tipo' => $item['farmacia_tipo'],
'usa_combustivel' => $item['usa_combustivel'],'referencia' => $item['referencia'],'perda' => $item['perda'],'composicao1' => $item['composicao1'],'composicao2' => $item['composicao2'],'iat' => $item['iat'],'ippt' => $item['ippt'],'situacao_tributaria' => $item['situacao_tributaria'],
'flag_sis' => $item['flag_sis'],'flag_aceito' => $item['flag_aceito'],'flag_est' => $item['flag_est'],'csosn' => $item['csosn'],
'codoriginal' => $item['codoriginal'],'custo_atacado' => $item['custo_atacado'],'unidade_atacado' => $item['unidade_atacado'],'qtde_embalagematacado' => $item['qtde_embalagematacado'],'pmargem1' => $item['pmargem1'],'pmargem2' => $item['pmargem2'],'pmargem3' => $item['pmargem3'],
'pmargem4' => $item['pmargem4'],'pmargem5' => $item['pmargem5'],'pmargematacado1' => $item['pmargematacado1'],'pmargematacado2' => $item['pmargematacado2'],'pmargematacado3' => $item['pmargematacado3'],'pmargematacado4' => $item['pmargematacado4'],
'pmargematacado5' => $item['pmargematacado5'],'pmargematacado6' => $item['pmargematacado6'],'precoatacado1' => $item['precoatacado1'],
'precoatacado2' => $item['precoatacado2'],'precoatacado3' => $item['precoatacado3'],'precoatacado4' => $item['precoatacado4'],'precoatacado5' => $item['precoatacado5'],'ind_cfop' => $item['ind_cfop'],'cfop_desc' => $item['cfop_desc'],'usa_lote' => $item['usa_lote'],
'ind_cfop_venda_dentro' => $item['ind_cfop_venda_dentro'],'codconta' => $item['codconta'],'ind_cfop_venda_fora' => $item['ind_cfop_venda_fora'],'ind_cfop_devolucao_dentro' => $item['ind_cfop_devolucao_dentro'],'ind_cfop_devolucao_fora' => $item['ind_cfop_devolucao_fora'],
'ind_cfop_garantia_dentro' => $item['ind_cfop_garantia_dentro'],'ind_cfop_garantia_fora' => $item['ind_cfop_garantia_fora'],'usa_tb_pc' => $item['usa_tb_pc'],'ativa' => $item['ativa'],'cest' => $item['cest'],
'codgen' => $item['codgen'],'imobilizado' => $item['imobilizado'],'max_desconto' => $item['max_desconto'],'codorigem' => $item['codorigem'],'indice_pis' => $item['indice_pis'],'indice_cofins' => $item['indice_cofins'],'codigo_tributacao' => $item['codigo_tributacao'],
'aliquota_st' => $item['aliquota_st'],'pfcp' => $item['pfcp'],'pfcpst' => $item['pfcpst'],'vtroco' => $item['vtroco'],'aliquita_credsn' => $item['aliquita_credsn'],'cst_pis' => $item['cst_pis'],'cst_cofins' => $item['cst_cofins'],'ind_cfop_nfce' => $item['ind_cfop_nfce'],
'pesagem_auotmatica' => $item['pesagem_auotmatica'],'nao_movimenta_estoque' => $item['nao_movimenta_estoque'],'informa_codigo_barra_xml' => $item['informa_codigo_barra_xml'],'codigo_anp' => $item['codigo_anp'],'origem' => $item['origem'],'fotobd' => $item['fotobd'],
'id_tipo_servico' => $item['id_tipo_servico'],'codbalanca' => $item['codbalanca'],'codloja' => $item['codloja'],'combo' => $item['combo'],'ind_cfop_dev_compra_dentro' => $item['ind_cfop_dev_compra_dentro'],'ind_cfop_dev_compra_fora' => $item['ind_cfop_dev_compra_fora'],
'pizza' => $item['pizza'],'percglnn' => $item['percglnn'],'percglgni' => $item['percglgni'],'pglp' => $item['pglp'],
'vpart' => $item['vpart'],'ecf_icms' => $item['ecf_icms'],'idonline' => $item['idonline'],'datamov' => $item['datamov'],'tela_painel' => $item['tela_painel'],'codempresa' => $item['codempresa'],'vasilhame' => $item['vasilhame'],'cod_part' => $item['cod_part'],
'ind_prop' => $item['ind_prop'],'decr_anp' => $item['decr_anp'],'aliquotanp' => $item['aliquotanp'],'ufanp' => $item['ufanp'],'codif' => $item['codif'],'fifo' => $item['fifo'],'justdesonera' => $item['justdesonera'],
               ];
               c000025::create($prodData);
        }
        return response()->json([
            'message' => 'Produtos recebidos com sucesso!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

         $produto =  c000025::findOrFail($id);
         return response()->json($produto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Cliente = c000025::findOrFail($id);
        $Cliente->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
