<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC116
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_mod
 * @property string|null $nr_sat
 * @property string|null $chv_cfe
 * @property string|null $num_cfe
 * @property string|null $dt_doc
 *
 * @package App\Models
 */
class RegC116 extends Model
{
	protected $table = 'reg_c116';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_mod',
		'nr_sat',
		'chv_cfe',
		'num_cfe',
		'dt_doc'
	];
}
