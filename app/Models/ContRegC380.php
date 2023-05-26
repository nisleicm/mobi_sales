<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegC380
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cod_mod
 * @property Carbon|null $dt_doc_ini
 * @property Carbon|null $dt_doc_fin
 * @property string|null $num_doc_ini
 * @property string|null $num_doc_fin
 * @property float|null $vl_doc
 * @property float|null $vl_doc_canc
 *
 * @package App\Models
 */
class ContRegC380 extends Model
{
	protected $table = 'cont_reg_c380';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_doc_ini' => 'datetime',
		'dt_doc_fin' => 'datetime',
		'vl_doc' => 'float',
		'vl_doc_canc' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'cod_mod',
		'dt_doc_ini',
		'dt_doc_fin',
		'num_doc_ini',
		'num_doc_fin',
		'vl_doc',
		'vl_doc_canc'
	];
}
