<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cl00006
 * 
 * @property string|null $codigo
 * @property string|null $texto1
 * @property string|null $texto2
 * @property string|null $texto3
 * @property float|null $valor1
 * @property float|null $valor2
 * @property float|null $valor3
 * @property string|null $campo1
 * @property string|null $campo2
 * @property string|null $campo3
 * @property string|null $campo4
 * @property float|null $valor4
 * @property int $codempresa
 *
 * @package App\Models
 */
class Cl00006 extends Model
{
	protected $table = 'cl00006';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'valor1' => 'float',
		'valor2' => 'float',
		'valor3' => 'float',
		'valor4' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'texto1',
		'texto2',
		'texto3',
		'valor1',
		'valor2',
		'valor3',
		'campo1',
		'campo2',
		'campo3',
		'campo4',
		'valor4',
		'codempresa'
	];
}
