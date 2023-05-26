<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000089
 * 
 * @property string|null $codigo
 * @property string|null $cupom
 * @property Carbon|null $data
 * @property string|null $serial
 * @property string|null $ecf
 * @property float|null $subtotal
 * @property float|null $desconto
 * @property float|null $acrescimo
 * @property float|null $total
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000089 extends Model
{
	protected $table = 'c000089';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'subtotal' => 'float',
		'desconto' => 'float',
		'acrescimo' => 'float',
		'total' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'cupom',
		'data',
		'serial',
		'ecf',
		'subtotal',
		'desconto',
		'acrescimo',
		'total',
		'codempresa'
	];
}
