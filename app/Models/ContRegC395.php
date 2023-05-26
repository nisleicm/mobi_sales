<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegC395
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cod_mod
 * @property string|null $cod_part
 * @property string|null $ser
 * @property string|null $sub_ser
 * @property string|null $num_doc
 * @property Carbon|null $dt_doc
 * @property float|null $vl_doc
 *
 * @package App\Models
 */
class ContRegC395 extends Model
{
	protected $table = 'cont_reg_c395';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_doc' => 'datetime',
		'vl_doc' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'cod_mod',
		'cod_part',
		'ser',
		'sub_ser',
		'num_doc',
		'dt_doc',
		'vl_doc'
	];
}
