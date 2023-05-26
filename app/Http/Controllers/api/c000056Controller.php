<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\c000056;
use App\Models\c000057;
use Illuminate\Support\Facades\DB;

class c000056Controller extends Controller
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
        $proximoId = DB::table('c000056s')->max('id') + 1;
        $pedidoData = $request->only(['codigo',  'data',  'codcliente',  'codvendedor',  'subtotal',  'desconto',  'acrescimo',  'total',  'obs1',  'obs2',  'obs3',  'obs4',  'codnf',  'codvenda',  'gera_nf',  'qtde_meses',  'condpagtocliente',  'pend_entrada',  'pend_cheque',  'pend_cartao',  'nome_vendedor',  'entrada',  'codloja',  'status',  'tipo',  'dt_sinc_env',  'dt_sin_rec', 'assina', 'cliente_foto',  'codempresa']);
       //$pedidoData['codigo'] = str_pad($proximoId, 6, '0', STR_PAD_LEFT);
        $pedido = c000056::create($pedidoData);
        // Atualiza o campo 'codigo' com o próximo valor do ID autoincrementado
        $codigo = str_pad($proximoId, 6, '0', STR_PAD_LEFT);
        $pedido->update(['codigo' => $codigo]);

        $pedidoId = $pedido->id;
       // return response()->json([$pedidoData['codigo'],str_pad($proximoId, 6, '0', STR_PAD_LEFT)]);
        if (isset($request->item) && (is_array($request->item) || is_iterable($request->item))) {
            foreach ($request->item as $item) {
                $itemPedidoData = [
                'c000056_id' => $pedidoId,
                'codproduto' => $item['codproduto'],
			    'produto' => $item['produto'],
			    'unidade' => $item['unidade'],
			    'qtde' => $item['qtde'],
			    'unitario' => $item['unitario'],
			    'desconto' => $item['desconto'],
			    'acrescimo' => $item['acrescimo'],
			    'total' => $item['total'],
			    'codorcamento' => str_pad($pedidoId, 6, '0', STR_PAD_LEFT),
			    'codbarra' => $item['codbarra'],
			    'ncm' => $item['ncm'],
			    'lote' => $item['lote'],
			    'ind' => $item['ind'],
			    'numeracao' => $item['numeracao'],
			    'cst' => $item['cst'],
			    'icms' => $item['icms'],
			    'cfop' => $item['cfop'],
			    'aliquota' => $item['aliquota'],
			    'codgrade' => $item['codgrade'],
			    'tipo' => $item['tipo'],
			    'serial' => $item['serial'],
			    'item' => $item['item'],
		        'terminal' => $item['terminal'],
			    'codsubgrupo' => $item['codsubgrupo'],
			    'piscofins' => $item['piscofins'],
			    'serial_codint' => $item['serial_codint'],
			    'grade_codint' => $item['grade_codint'],
			    'obs' => $item['obs'],
			    'xitem' => $item['xitem'],
			    'xped' => $item['xped'],
			    'codloja' => $item['codloja'],
			    'status' => $item['status'],
			    'cod' => $item['cod'],
			    'codempresa' => $item['codempresa'],
             ];
             c000057::create($itemPedidoData);
        }
    }

         return response()->json(['message' => 'Pedido inserido com sucesso']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $pedido = c000056::with('itens')->find($id);

        if (!$pedido) {
            return response()->json(['error' => 'Pedido não encontrado'], 404);
        }

        $itens = $pedido->itens->map(function ($item) {
            return [
                'item' => $item->item,

            ];
        });

        $json = [
            'id' => $pedido->id,
            'codigo' => $pedido->codigo,
            'data' => $pedido->data,
            'codcliente' => $pedido->codcliente,
            'codvendedor' => $pedido->codvendedor,
            'subtotal' => $pedido->subtotal,
            'desconto' => $pedido->desconto,
            'acrescimo' => $pedido->acrescimo,
            'total' => $pedido->total,
            'obs1' => $pedido->obs1,
            'obs2' => $pedido->obs2,
            'obs3' => $pedido->obs3,
            'obs4' => $pedido->obs4,
            'codnf' => $pedido->codnf,
            'codvenda' => $pedido->codvenda,
            'gera_nf' => $pedido->gera_nf,
            'qtde_meses' => $pedido->qtde_meses,
            'condpagtocliente' => $pedido->condpagtocliente,
            'pend_entrada' => $pedido->pend_entrada,
            'pend_cheque' => $pedido->pend_cheque,
            'pend_cartao' => $pedido->pend_cartao,
            'nome_vendedor' => $pedido->nome_vendedor,
            'entrada' => $pedido->entrada,
            'codloja' => $pedido->codloja,
            'id' => $pedido->id,
            'status' => $pedido->status,
            'tipo' => $pedido->tipo,
            'dt_sinc_env' => $pedido->dt_sinc_env,
            'dt_sin_rec' => $pedido->dt_sin_rec,
            'assina' => $pedido->assina,
            'cliente_foto' => $pedido->cliente_foto,
            'codempresa' => $pedido->codempresa,
            'item' => $pedido->itens,


        ];

        return response()->json($json);

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

         $registros = c000056::whereBetween('data', [$dataInicio, $dataFim])->get();

         return response()->json($registros);
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
        $pedidoData = $request->only(['codigo', 'data', 'codcliente', 'codvendedor', 'subtotal', 'desconto', 'acrescimo', 'total', 'obs1', 'obs2', 'obs3', 'obs4', 'codnf', 'codvenda', 'gera_nf', 'qtde_meses', 'condpagtocliente', 'pend_entrada', 'pend_cheque', 'pend_cartao', 'nome_vendedor', 'entrada', 'codloja', 'status', 'tipo', 'dt_sinc_env', 'dt_sin_rec', 'assina', 'cliente_foto', 'codempresa']);
        $pedido = c000056::find($id);
        $pedido->update($pedidoData);
        $codigo = str_pad($pedido->id, 6, '0', STR_PAD_LEFT);
        $pedido->update(['codigo' => $codigo]);
        $pedido->itens()->delete(); // Remove todos os itens antigos do pedido

        if (isset($request->item) && (is_array($request->item) || is_iterable($request->item))) {
            foreach ($request->item as $item) {
                $itemPedidoData = [
                    'c000056_id' => $pedido->id,
                    'codproduto' => $item['codproduto'],
			    'produto' => $item['produto'],
			    'unidade' => $item['unidade'],
			    'qtde' => $item['qtde'],
			    'unitario' => $item['unitario'],
			    'desconto' => $item['desconto'],
			    'acrescimo' => $item['acrescimo'],
			    'total' => $item['total'],
			    'codorcamento' => str_pad($pedido->id, 6, '0', STR_PAD_LEFT),
			    'codbarra' => $item['codbarra'],
			    'ncm' => $item['ncm'],
			    'lote' => $item['lote'],
			    'ind' => $item['ind'],
			    'numeracao' => $item['numeracao'],
			    'cst' => $item['cst'],
			    'icms' => $item['icms'],
			    'cfop' => $item['cfop'],
			    'aliquota' => $item['aliquota'],
			    'codgrade' => $item['codgrade'],
			    'tipo' => $item['tipo'],
			    'serial' => $item['serial'],
			    'item' => $item['item'],
		        'terminal' => $item['terminal'],
			    'codsubgrupo' => $item['codsubgrupo'],
			    'piscofins' => $item['piscofins'],
			    'serial_codint' => $item['serial_codint'],
			    'grade_codint' => $item['grade_codint'],
			    'obs' => $item['obs'],
			    'xitem' => $item['xitem'],
			    'xped' => $item['xped'],
			    'codloja' => $item['codloja'],
			    'status' => $item['status'],
			    'cod' => $item['cod'],
			    'codempresa' => $item['codempresa'],
                ];

                c000057::create($itemPedidoData); // Insere os novos itens do pedido
            }
        }

           return response()->json([
               'message' => 'Pedido atualizado com sucesso!'
        ]);


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedido = c000056::find($id);

        if (!$pedido) {
            return response()->json(['message' => 'Pedido não encontrado.'], 404);
        }

        $pedido->itens()->delete();

        $pedido->delete();

        return response()->json(['message' => 'Pedido excluído com sucesso.']);
    }



}
