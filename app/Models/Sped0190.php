<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sped0190
 * 
 * @property string|null $codigo
 * @property Carbon|null $dt_ini
 * @property Carbon|null $dt_fim
 * @property string|null $unidade
 * @property string|null $descricao
 * @property int $codempresa
 *
 * @package App\Models
 */
class Sped0190 extends Model
{
	protected $table = 'sped_0190';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'dt_ini' => 'datetime',
		'dt_fim' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'dt_ini',
		'dt_fim',
		'unidade',
		'descricao',
		'codempresa'
	];
}
