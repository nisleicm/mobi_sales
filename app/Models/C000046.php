<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000046
 * 
 * @property string $id
 * @property Carbon|null $data_emissao
 * @property Carbon|null $data_vencimento
 * @property Carbon|null $data_pagamento
 * @property string|null $codconta
 * @property string|null $codfornecedor
 * @property float|null $valor
 * @property float|null $valorpago
 * @property float|null $liquido
 * @property float|null $desconto
 * @property float|null $acrescimo
 * @property string|null $documento
 * @property string|null $notafiscal
 * @property string|null $historico
 * @property string|null $c
 * @property string|null $e
 * @property int|null $filtro
 * @property string|null $especie
 * @property int|null $situacao
 * @property string|null $codnota
 * @property int|null $movimento
 * @property string|null $codcaixa
 * @property string|null $conta
 * @property string|null $codloja
 * @property int|null $idonline
 * @property Carbon|null $datamov
 * @property string|null $idmovloja
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000046 extends Model
{
	protected $table = 'c000046';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data_emissao' => 'datetime',
		'data_vencimento' => 'datetime',
		'data_pagamento' => 'datetime',
		'valor' => 'float',
		'valorpago' => 'float',
		'liquido' => 'float',
		'desconto' => 'float',
		'acrescimo' => 'float',
		'filtro' => 'int',
		'situacao' => 'int',
		'movimento' => 'int',
		'idonline' => 'int',
		'datamov' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'data_emissao',
		'data_vencimento',
		'data_pagamento',
		'codconta',
		'codfornecedor',
		'valor',
		'valorpago',
		'liquido',
		'desconto',
		'acrescimo',
		'documento',
		'notafiscal',
		'historico',
		'c',
		'e',
		'filtro',
		'especie',
		'situacao',
		'codnota',
		'movimento',
		'codcaixa',
		'conta',
		'codloja',
		'idonline',
		'datamov',
		'idmovloja',
		'codempresa'
	];
}
