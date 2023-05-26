<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000044
 * 
 * @property string $codigo
 * @property string|null $codcaixa
 * @property string|null $codoperador
 * @property Carbon|null $data
 * @property float|null $saida
 * @property float|null $entrada
 * @property string|null $codconta
 * @property string|null $historico
 * @property int|null $movimento
 * @property float|null $valor
 * @property string|null $codnfsaida
 * @property string|null $codvenda
 * @property int|null $numero_abertura_caixa
 * @property string|null $codfilial
 * @property string|null $serial_pos
 * @property string|null $cartao_nome_consumidor
 * @property string|null $cartao_bin
 * @property string|null $cartao_validade
 * @property string|null $cartao_n_autorizacao
 * @property string|null $cartao_nsu
 * @property string|null $cartao_instituicao
 * @property string|null $cartao_id_pagamento
 * @property string|null $chave
 * @property string|null $numero_cfe
 * @property string|null $cartao_bandeira
 * @property string|null $cartao_rf
 * @property string|null $cartao_mensagem
 * @property int|null $cartao_parcelas
 * @property int|null $cartao_4digitos
 * @property string|null $codloja
 * @property Carbon|null $hora
 * @property int|null $idonline
 * @property string|null $codtrans
 * @property Carbon|null $datamov
 * @property string|null $idmovloja
 * @property int $codempresa
 * @property int $id
 * @property Carbon|null $updated_at
 * @property Carbon|null $created_at
 *
 * @package App\Models
 */
class C000044 extends Model
{
	protected $table = 'c000044';
	public $incrementing = false;

	protected $casts = [
		'data' => 'datetime',
		'saida' => 'float',
		'entrada' => 'float',
		'movimento' => 'int',
		'valor' => 'float',
		'numero_abertura_caixa' => 'int',
		'cartao_parcelas' => 'int',
		'cartao_4digitos' => 'int',
		'hora' => 'datetime',
		'idonline' => 'int',
		'datamov' => 'datetime',
		'codempresa' => 'int',
		'id' => 'int'
	];

	protected $fillable = [
		'codigo',
		'codcaixa',
		'codoperador',
		'data',
		'saida',
		'entrada',
		'codconta',
		'historico',
		'movimento',
		'valor',
		'codnfsaida',
		'codvenda',
		'numero_abertura_caixa',
		'codfilial',
		'serial_pos',
		'cartao_nome_consumidor',
		'cartao_bin',
		'cartao_validade',
		'cartao_n_autorizacao',
		'cartao_nsu',
		'cartao_instituicao',
		'cartao_id_pagamento',
		'chave',
		'numero_cfe',
		'cartao_bandeira',
		'cartao_rf',
		'cartao_mensagem',
		'cartao_parcelas',
		'cartao_4digitos',
		'codloja',
		'hora',
		'idonline',
		'codtrans',
		'datamov',
		'idmovloja',
		'codempresa',
		'id'
	];
}
