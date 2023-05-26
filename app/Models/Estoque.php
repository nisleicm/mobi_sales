<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Estoque
 * 
 * @property string $tipo
 * @property string $codproduto
 * @property Carbon|null $data
 * @property float|null $quantidade
 * @property float|null $valor
 * @property int $codempresa
 * @property string|null $cfop
 * @property float|null $acrecimo_maximo
 *
 * @package App\Models
 */
class Estoque extends Model
{
	protected $table = 'estoque';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'quantidade' => 'float',
		'valor' => 'float',
		'codempresa' => 'int',
		'acrecimo_maximo' => 'float'
	];

	protected $fillable = [
		'tipo',
		'data',
		'quantidade',
		'valor',
		'cfop',
		'acrecimo_maximo'
	];
}
