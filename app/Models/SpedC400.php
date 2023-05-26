<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SpedC400
 * 
 * @property string|null $codigo
 * @property string|null $reg
 * @property string|null $cod_mod
 * @property string|null $ecf_mod
 * @property string|null $ecf_fab_sn
 * @property int|null $ecf_cx
 * @property Carbon|null $dt_ini
 * @property Carbon|null $dt_fim
 * @property int $codempresa
 *
 * @package App\Models
 */
class SpedC400 extends Model
{
	protected $table = 'sped_c400';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ecf_cx' => 'int',
		'dt_ini' => 'datetime',
		'dt_fim' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'reg',
		'cod_mod',
		'ecf_mod',
		'ecf_fab_sn',
		'ecf_cx',
		'dt_ini',
		'dt_fim',
		'codempresa'
	];
}
