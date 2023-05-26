<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000120
 * 
 * @property string $codigo
 * @property Carbon|null $data
 * @property string|null $hora
 * @property Carbon|null $vencimento
 * @property int|null $localizado
 * @property Carbon|null $previsao
 * @property int|null $aviso
 * @property string|null $comprador
 * @property string|null $obs
 * @property string|null $codcomprador
 * @property string|null $prestacao
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000120 extends Model
{
	protected $table = 'c000120';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'vencimento' => 'datetime',
		'localizado' => 'int',
		'previsao' => 'datetime',
		'aviso' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'data',
		'hora',
		'vencimento',
		'localizado',
		'previsao',
		'aviso',
		'comprador',
		'obs',
		'codcomprador',
		'prestacao'
	];
}
