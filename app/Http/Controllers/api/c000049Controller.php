<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\c000049;

class c000049Controller extends Controller
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
        $cob = c000049::paginate(200);

        return response()->json($cob);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function registrosPorPeriodo(Request $request)
     {
        $vendedor = $request->input('vendedor');
        $cliente = $request->input('cliente');

        $registros = c000049::where('codcliente', $cliente)
                            ->where('codvendedor', $vendedor)
                            ->where('situacao', 1)
                            ->get();
        return response()->json($registros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function cobPorPeriodo(Request $request)
     {
        $dataIni = $request->input('dataIni');
        $dataFim = $request->input('dataFim');
        $vendedor = $request->input('vendedor');
        $dataInicio = date('Y-m-d 00:00:00', strtotime($dataIni));
        $dataFim = date('Y-m-d 23:59:59', strtotime($dataFim));

        $registros = c000049::whereBetween('data_vencimento', [$dataInicio, $dataFim])
                    ->where('codvendedor', $vendedor)
                    ->where('situacao', '=', 1) // adiciona condição personalizada
                    ->get();
        return response()->json($registros);
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
               $cobData = [
        'codigo' => $item['codigo'],'codvenda' => $item['codvenda'],'codvendedor' => $item['codvendedor'],
        'codcaixa' => $item['codcaixa'],'codcliente' => $item['codcliente'],'data_emissao' => $item['data_emissao'],
        'data_vencimento' => $item['data_vencimento'],'data_pagamento' => $item['data_pagamento'],
        'valor_original' => $item['valor_original'],'valor_pago' => $item['valor_pago'],
        'valor_juros' => $item['valor_juros'],'valor_atual' => $item['valor_atual'],
        'valor_desconto' => $item['valor_desconto'],'documento' => $item['documento'],
        'tipo' => $item['tipo'],'situacao' => $item['situacao'],'filtro' => $item['filtro'],
        'nossonumero' => $item['nossonumero'],'codregiao' => $item['codregiao'],'codcedente' => $item['codcedente'],
        'p5' => $item['p5'],'p3' => $item['p3'],'numero_cupom' => $item['numero_cupom'],
        'valor_venda' => $item['valor_venda'],'cod_venda_original' => $item['cod_venda_original'],
        'valor_atual_anterior' => $item['valor_atual_anterior'],'email_enviado' => $item['email_enviado'],
        'historico' => $item['historico'],'boletogerado' => $item['boletogerado'],'situacao2' => $item['situacao2'],
        'instrucao' => $item['instrucao'],'dirboleto' => $item['dirboleto'],'codfilial' => $item['codfilial'],
        'baixa_automatica' => $item['baixa_automatica'],'bol_impresso' => $item['bol_impresso'],'cod_conta' => $item['cod_conta'],
        'remessa' => $item['remessa'],'retirado_por' => $item['retirado_por'],'codloja' => $item['codloja'],
        'idonline' => $item['idonline'],'datamov' => $item['datamov'],'idmovloja' => $item['idmovloja'],'codempresa' => $item['codempresa'],
         ];
             c000049::create($cobData);
        }
          return response()->json(['message' => 'Contas recebidas com sucesso!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function updel(Request $request)
{
  /*  $registro = Registro::findOrFail($request->id);
    $registro->status = $request->status;
    $registro->save();

    return response()->json(['message' => 'Registro atualizado com sucesso']);*/
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
        $Cliente = c000049::findOrFail($id);
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
