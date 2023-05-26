<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC114
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_mod
 * @property string|null $ecf_fab
 * @property string|null $ecf_cx
 * @property string|null $num_doc
 * @property Carbon|null $dt_doc
 *
 * @package App\Models
 */
class RegC114 extends Model
{
	protected $table = 'reg_c114';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_doc' => 'datetime'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_mod',
		'ecf_fab',
		'ecf_cx',
		'num_doc',
		'dt_doc'
	];
}
