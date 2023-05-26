<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000050
 * 
 * @property string|null $codconta
 * @property Carbon|null $data
 * @property float|null $valor_parcela
 * @property float|null $valor_juros
 * @property float|null $valor_desconto
 * @property float|null $valor_pago
 * @property float|null $dinheiro
 * @property float|null $chequeav
 * @property float|null $chequeap
 * @property float|null $cartao
 * @property float|null $boleto
 * @property float|null $troco
 * @property float|null $credito
 * @property string|null $codcliente
 * @property int|null $caixa_banco
 * @property string|null $codfunc_comissao
 * @property int|null $id
 * @property int|null $idonline
 * @property string|null $codloja
 * @property float|null $movimento
 * @property Carbon|null $datamov
 * @property string|null $idmovloja
 * @property int $codempresa
 * @property float|null $pix
 *
 * @package App\Models
 */
class C000050 extends Model
{
	protected $table = 'c000050';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'valor_parcela' => 'float',
		'valor_juros' => 'float',
		'valor_desconto' => 'float',
		'valor_pago' => 'float',
		'dinheiro' => 'float',
		'chequeav' => 'float',
		'chequeap' => 'float',
		'cartao' => 'float',
		'boleto' => 'float',
		'troco' => 'float',
		'credito' => 'float',
		'caixa_banco' => 'int',
		'id' => 'int',
		'idonline' => 'int',
		'movimento' => 'float',
		'datamov' => 'datetime',
		'codempresa' => 'int',
		'pix' => 'float'
	];

	protected $fillable = [
		'codconta',
		'data',
		'valor_parcela',
		'valor_juros',
		'valor_desconto',
		'valor_pago',
		'dinheiro',
		'chequeav',
		'chequeap',
		'cartao',
		'boleto',
		'troco',
		'credito',
		'codcliente',
		'caixa_banco',
		'codfunc_comissao',
		'id',
		'idonline',
		'codloja',
		'movimento',
		'datamov',
		'idmovloja',
		'codempresa',
		'pix'
	];
}
