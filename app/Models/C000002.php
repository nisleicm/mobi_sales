<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000002
 * 
 * @property string $codigo
 * @property string|null $codusuario
 * @property Carbon|null $data
 * @property string|null $procedimento
 * @property string|null $obs
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000002 extends Model
{
	protected $table = 'c000002';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codusuario',
		'data',
		'procedimento',
		'obs',
		'codempresa'
	];
}
