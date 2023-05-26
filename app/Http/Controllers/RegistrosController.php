<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Registro;
use App\Models\c000044;




class RegistrosController extends Controller
{
    public function registrosPorPeriodo(Request $request)
    {

        public function __construct()
    {
        $this->middleware('auth:api');
    }

        $dataInicio = $request->input('dataInicio');
        $dataFim = $request->input('dataFim');

        $registros = c000044::whereBetween('data', [$dataInicio, $dataFim])->get();

        return response()->json($registros);
    }
}
