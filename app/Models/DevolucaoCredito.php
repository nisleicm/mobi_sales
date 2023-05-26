<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DevolucaoCredito
 * 
 * @property int $id
 * @property Carbon|null $vencimento
 * @property float|null $valor
 * @property float|null $valor_utilizado
 * @property float|null $valor_saldo
 * @property string|null $cupom_utilizado
 * @property int $codempresa
 *
 * @package App\Models
 */
class DevolucaoCredito extends Model
{
	protected $table = 'devolucao_credito';
	public $timestamps = false;

	protected $casts = [
		'vencimento' => 'datetime',
		'valor' => 'float',
		'valor_utilizado' => 'float',
		'valor_saldo' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'vencimento',
		'valor',
		'valor_utilizado',
		'valor_saldo',
		'cupom_utilizado'
	];
}
