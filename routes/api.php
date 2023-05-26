<?php
namespace App\Http\Controllers;
//namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group([

    'middleware' => 'api',

], function ($router) {

    Route::get('/', function(){
        return response()->json(['message'=> 'BSSI Api', 'status' => 'Connected']);
    });

    Route::fallback(function (){
       return response()->json(['message' => 'Route not found','Connected']);
    });

    Route::post('login', [AuthController::class,'login']);
    Route::post('register', [AuthController::class,'register']);
    Route::post('logout', [AuthController::class,'logout']);
    Route::post('refresh', [AuthController::class,'refresh']);
    Route::post('me', [AuthController::class,'me']);
    Route::get('/cliente', 'App\Http\Controllers\api\c000007Controller@Show');
    Route::get('/clientes', 'App\Http\Controllers\api\c000007Controller@index');
    Route::get('/usuarios/{codigo}', 'App\Http\Controllers\api\c000008Controller@Show');
    Route::apiResource('/clienten', 'App\Http\Controllers\api\c000007Controller');
    Route::apiResource('/pedido', 'App\Http\Controllers\api\c000056Controller');
    Route::apiResource('/estoque', 'App\Http\Controllers\api\c000100Controller');
    Route::apiResource('/produto', 'App\Http\Controllers\api\c000025Controller');
    Route::apiResource('/TipoPgto', 'App\Http\Controllers\api\c000014Controller');
    Route::apiResource('/grupo', 'App\Http\Controllers\api\c000017Controller');
    Route::apiResource('/subgrupo', 'App\Http\Controllers\api\c000018Controller');
    Route::apiResource('/vendedor', 'App\Http\Controllers\api\c000008Controller');
    Route::apiResource('/caixa', 'App\Http\Controllers\api\c000044Controller');
    Route::apiResource('/cob', 'App\Http\Controllers\api\c000049Controller');
    Route::get('pedidos/{id}', 'App\Http\Controllers\api\c000056Controller@show');
    Route::get('/caixaPorPeriodo', 'App\Http\Controllers\api\c000044Controller@registrosPorPeriodo');
    Route::get('/pedidosPorPeriodo', 'App\Http\Controllers\api\c000056Controller@registrosPorPeriodo');
    Route::get('/cobPorPeriodo', 'App\Http\Controllers\api\c000049Controller@cobPorPeriodo');
    Route::get('/cobcv', 'App\Http\Controllers\api\c000049Controller@registrosPorPeriodo');

});
