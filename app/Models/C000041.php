<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000041
 * 
 * @property string $codigo
 * @property string|null $conta
 * @property string|null $codbanco
 * @property string|null $agencia
 * @property float|null $saldo
 * @property string|null $titular
 * @property string|null $nome_agencia
 * @property string|null $contadig
 * @property string|null $agenciadig
 * @property string|null $codcedente
 * @property string|null $fisicajuridica
 * @property string|null $cpfcnpj
 * @property int|null $tipo
 * @property string|null $instrucoes1
 * @property string|null $instrucoes2
 * @property string|null $instrucoes3
 * @property string|null $nossonum
 * @property int|null $layout
 * @property string|null $carteira
 * @property string|null $mensagem
 * @property int|null $dias_protesto
 * @property string|null $especie
 * @property string|null $moeda
 * @property string|null $aceite
 * @property string|null $local_pagto
 * @property int|null $cont_remessa
 * @property int|null $idonline
 * @property Carbon|null $datamov
 * @property string|null $idmovloja
 * @property int $codempresa
 * @property int|null $cheque_def
 *
 * @package App\Models
 */
class C000041 extends Model
{
	protected $table = 'c000041';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'saldo' => 'float',
		'tipo' => 'int',
		'layout' => 'int',
		'dias_protesto' => 'int',
		'cont_remessa' => 'int',
		'idonline' => 'int',
		'datamov' => 'datetime',
		'codempresa' => 'int',
		'cheque_def' => 'int'
	];

	protected $fillable = [
		'conta',
		'codbanco',
		'agencia',
		'saldo',
		'titular',
		'nome_agencia',
		'contadig',
		'agenciadig',
		'codcedente',
		'fisicajuridica',
		'cpfcnpj',
		'tipo',
		'instrucoes1',
		'instrucoes2',
		'instrucoes3',
		'nossonum',
		'layout',
		'carteira',
		'mensagem',
		'dias_protesto',
		'especie',
		'moeda',
		'aceite',
		'local_pagto',
		'cont_remessa',
		'idonline',
		'datamov',
		'idmovloja',
		'codempresa',
		'cheque_def'
	];
}
