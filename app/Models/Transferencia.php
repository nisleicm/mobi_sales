<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Transferencia
 * 
 * @property string $codigo
 * @property Carbon|null $data
 * @property string $codoperador
 * @property string $codnota
 * @property string $codorigem
 * @property string $coddestino
 * @property string|null $tipo
 * @property string|null $observacao
 * @property string|null $situacao
 * @property int $codempresa
 *
 * @package App\Models
 */
class Transferencia extends Model
{
	protected $table = 'transferencias';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'data',
		'codoperador',
		'codnota',
		'codorigem',
		'coddestino',
		'tipo',
		'observacao',
		'situacao'
	];
}
