<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000096
 * 
 * @property string $codigo
 * @property Carbon|null $data
 * @property string|null $codcliente
 * @property string|null $codvendedor
 * @property float|null $subtotal
 * @property float|null $desconto
 * @property float|null $acrescimo
 * @property float|null $total
 * @property string|null $obs1
 * @property string|null $obs2
 * @property string|null $obs3
 * @property string|null $obs4
 * @property int|null $tipo
 * @property int|null $finalizado
 * @property string|null $codfilial
 * @property string|null $filial
 * @property string|null $codloja
 * @property Carbon|null $datamov
 * @property string|null $idmovloja
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000096 extends Model
{
	protected $table = 'c000096';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'subtotal' => 'float',
		'desconto' => 'float',
		'acrescimo' => 'float',
		'total' => 'float',
		'tipo' => 'int',
		'finalizado' => 'int',
		'datamov' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'data',
		'codcliente',
		'codvendedor',
		'subtotal',
		'desconto',
		'acrescimo',
		'total',
		'obs1',
		'obs2',
		'obs3',
		'obs4',
		'tipo',
		'finalizado',
		'codfilial',
		'filial',
		'codloja',
		'datamov',
		'idmovloja'
	];
}
