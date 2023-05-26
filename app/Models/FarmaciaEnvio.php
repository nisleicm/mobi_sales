<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FarmaciaEnvio
 * 
 * @property Carbon $data
 * @property string|null $codoperador
 * @property string|null $gerado
 * @property string|null $enviado
 * @property string|null $rejeitado
 * @property string|null $log
 * @property string|null $hash
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class FarmaciaEnvio extends Model
{
	protected $table = 'farmacia_envio';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'data',
		'codoperador',
		'gerado',
		'enviado',
		'rejeitado',
		'log',
		'hash',
		'codempresa'
	];
}
