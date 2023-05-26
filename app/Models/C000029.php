<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000029
 * 
 * @property string $codigo
 * @property string|null $codproduto
 * @property Carbon|null $data
 * @property string|null $movimento
 * @property string|null $codcliente
 * @property string|null $codsaida
 * @property string|null $codentrada
 * @property string|null $codvendedor
 * @property float|null $qtde
 * @property float|null $valor
 * @property float|null $total
 * @property string|null $notafiscal
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000029 extends Model
{
	protected $table = 'c000029';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'qtde' => 'float',
		'valor' => 'float',
		'total' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codproduto',
		'data',
		'movimento',
		'codcliente',
		'codsaida',
		'codentrada',
		'codvendedor',
		'qtde',
		'valor',
		'total',
		'notafiscal',
		'codempresa'
	];
}
