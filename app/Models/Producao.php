<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Producao
 * 
 * @property int $codigo
 * @property int $codigo_maquina
 * @property Carbon $data
 * @property string|null $descricao
 * @property int $codempresa
 *
 * @package App\Models
 */
class Producao extends Model
{
	protected $table = 'producao';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'codigo_maquina' => 'int',
		'data' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo_maquina',
		'data',
		'descricao',
		'codempresa'
	];
}
