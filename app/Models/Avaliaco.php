<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Avaliaco
 * 
 * @property int $codigo
 * @property int|null $rate
 * @property Carbon|null $data_avaliacao
 * @property string|null $obs
 * @property int $num_expediente
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class Avaliaco extends Model
{
	protected $table = 'avaliacoes';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'rate' => 'int',
		'data_avaliacao' => 'datetime',
		'num_expediente' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'rate',
		'data_avaliacao',
		'obs',
		'num_expediente',
		'codempresa'
	];
}
