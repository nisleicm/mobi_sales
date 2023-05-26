<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class IndustriaLaudo
 * 
 * @property int $codigo
 * @property string|null $lote
 * @property string|null $codtecnico
 * @property string|null $codsetor
 * @property Carbon|null $data
 * @property string|null $hora
 * @property string|null $laudo
 * @property int $codempresa
 *
 * @package App\Models
 */
class IndustriaLaudo extends Model
{
	protected $table = 'industria_laudo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'data' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'lote',
		'codtecnico',
		'codsetor',
		'data',
		'hora',
		'laudo'
	];
}
