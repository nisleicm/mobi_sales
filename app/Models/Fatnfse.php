<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Fatnfse
 * 
 * @property int $codigo
 * @property int|null $codnfse
 * @property int|null $codempresa
 * @property int|null $parcela
 * @property Carbon|null $data
 * @property float|null $valor
 *
 * @package App\Models
 */
class Fatnfse extends Model
{
	protected $table = 'fatnfse';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'codnfse' => 'int',
		'codempresa' => 'int',
		'parcela' => 'int',
		'data' => 'datetime',
		'valor' => 'float'
	];

	protected $fillable = [
		'codigo',
		'codnfse',
		'codempresa',
		'parcela',
		'data',
		'valor'
	];
}
