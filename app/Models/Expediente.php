<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Expediente
 * 
 * @property int $codigo
 * @property Carbon $abertura
 * @property Carbon|null $fechamento
 * @property string|null $obs
 * @property int $codempresa
 *
 * @package App\Models
 */
class Expediente extends Model
{
	protected $table = 'expediente';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'abertura' => 'datetime',
		'fechamento' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'abertura',
		'fechamento',
		'obs',
		'codempresa'
	];
}
