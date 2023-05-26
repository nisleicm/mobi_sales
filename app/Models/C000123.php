<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000123
 * 
 * @property string $codigo
 * @property string|null $codbanco
 * @property Carbon|null $data
 * @property string|null $codcliente
 * @property float|null $valor
 * @property int|null $situacao
 * @property Carbon|null $data_pgto
 * @property float|null $valor_pago
 * @property string|null $bordero
 * @property string|null $proposta
 * @property string|null $obs
 * @property string|null $codvenda
 * @property string|null $codvendedor
 * @property string|null $codloja
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000123 extends Model
{
	protected $table = 'c000123';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'valor' => 'float',
		'situacao' => 'int',
		'data_pgto' => 'datetime',
		'valor_pago' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codbanco',
		'data',
		'codcliente',
		'valor',
		'situacao',
		'data_pgto',
		'valor_pago',
		'bordero',
		'proposta',
		'obs',
		'codvenda',
		'codvendedor',
		'codloja'
	];
}
