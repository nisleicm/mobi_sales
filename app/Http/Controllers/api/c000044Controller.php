<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\c000044;

class c000044Controller extends Controller
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
        $prod = c000044::paginate(200);

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function registrosPorPeriodo(Request $request)
    {
        $dataInicio = $request->input('dataInicio');
        $dataFim = $request->input('dataFim');

        $registros = c000044::whereBetween('data', [$dataInicio, $dataFim])->get();

        return response()->json($registros);
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
               $caixaData = [
                'codigo' => $item['codigo'], 'codcaixa' => $item['codcaixa'], 'codoperador' => $item['codoperador'],
                'data' => $item['data'], 'saida' => $item['saida'], 'entrada' => $item['entrada'], 'codconta' => $item['codconta'],
                'historico' => $item['historico'], 'movimento' => $item['movimento'],'valor' => $item['valor'],
                'codnfsaida' => $item['codnfsaida'], 'codvenda' => $item['codvenda'], 'numero_abertura_caixa' => $item['numero_abertura_caixa'],
                'codfilial' => $item['codfilial'], 'serial_pos' => $item['serial_pos'],
                'cartao_nome_consumidor' => $item['cartao_nome_consumidor'],'cartao_bin' => $item['cartao_bin'],
                 'cartao_validade' => $item['cartao_validade'], 'cartao_n_autorizacao' => $item['cartao_n_autorizacao'],
                 'cartao_nsu' => $item['cartao_nsu'], 'cartao_instituicao' => $item['cartao_instituicao'],
                'cartao_id_pagamento' => $item['cartao_id_pagamento'], 'chave' => $item['chave'],
                 'numero_cfe' => $item['numero_cfe'], 'cartao_bandeira' => $item['cartao_bandeira'], 'cartao_rf' => $item['cartao_rf'],
                 'cartao_mensagem' => $item['cartao_mensagem'], 'cartao_parcelas' => $item['cartao_parcelas'],
                 'cartao_4digitos' => $item['cartao_4digitos'], 'codloja' => $item['codloja'], 'hora' => $item['hora'],
                'idonline' => $item['idonline'], 'codtrans' => $item['codtrans'], 'datamov' => $item['datamov'],
                 'idmovloja' => $item['idmovloja'], 'codempresa' => $item['codempresa'],
                ];
               c000044::create($caixaData);
        }
        return response()->json([
            'message' => 'caixas recebidos com sucesso!']);
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
        $Cliente = c000044::findOrFail($id);
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
