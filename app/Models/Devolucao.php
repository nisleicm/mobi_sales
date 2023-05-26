<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Devolucao
 * 
 * @property int $id
 * @property int|null $id_credito
 * @property Carbon|null $data
 * @property string|null $hora
 * @property string|null $codcliente
 * @property string|null $cupom_devolucao
 * @property string|null $item
 * @property float|null $valor
 * @property string|null $cupom_devolvido
 * @property int $codempresa
 *
 * @package App\Models
 */
class Devolucao extends Model
{
	protected $table = 'devolucao';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_credito' => 'int',
		'data' => 'datetime',
		'valor' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'id_credito',
		'data',
		'hora',
		'codcliente',
		'cupom_devolucao',
		'item',
		'valor',
		'cupom_devolvido'
	];
}
