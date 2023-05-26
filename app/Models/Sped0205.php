<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sped0205
 * 
 * @property string|null $codigo
 * @property string|null $descr_ant_item
 * @property Carbon|null $dt_ini
 * @property Carbon|null $dt_fim
 * @property string|null $cod_ant_item
 * @property int|null $enviado
 * @property int $codempresa
 *
 * @package App\Models
 */
class Sped0205 extends Model
{
	protected $table = 'sped_0205';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'dt_ini' => 'datetime',
		'dt_fim' => 'datetime',
		'enviado' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'descr_ant_item',
		'dt_ini',
		'dt_fim',
		'cod_ant_item',
		'enviado',
		'codempresa'
	];
}
