<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg0175
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property Carbon|null $dt_alt
 * @property string|null $nr_campo
 * @property string|null $cont_ant
 *
 * @package App\Models
 */
class Reg0175 extends Model
{
	protected $table = 'reg_0175';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_alt' => 'datetime'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'dt_alt',
		'nr_campo',
		'cont_ant'
	];
}
