<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FechamentoCego
 * 
 * @property Carbon|null $data
 * @property string|null $hora
 * @property int|null $operador
 * @property float|null $dinheiro
 * @property float|null $cheque
 * @property string|null $conciliado
 * @property string|null $verificado
 * @property float|null $cartao_credito
 * @property float|null $cartao_debito
 * @property float|null $convenio
 * @property float|null $crediario
 * @property int $codempresa
 *
 * @package App\Models
 */
class FechamentoCego extends Model
{
	protected $table = 'fechamento_cego';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'operador' => 'int',
		'dinheiro' => 'float',
		'cheque' => 'float',
		'cartao_credito' => 'float',
		'cartao_debito' => 'float',
		'convenio' => 'float',
		'crediario' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'data',
		'hora',
		'operador',
		'dinheiro',
		'cheque',
		'conciliado',
		'verificado',
		'cartao_credito',
		'cartao_debito',
		'convenio',
		'crediario',
		'codempresa'
	];
}
