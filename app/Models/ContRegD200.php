<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegD200
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cod_mod
 * @property string|null $cod_sit
 * @property string|null $ser
 * @property string|null $sub
 * @property string|null $num_doc_ini
 * @property string|null $num_doc_fin
 * @property string|null $cfop
 * @property Carbon|null $dt_ref
 * @property float|null $vl_doc
 * @property float|null $vl_desc
 *
 * @package App\Models
 */
class ContRegD200 extends Model
{
	protected $table = 'cont_reg_d200';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_ref' => 'datetime',
		'vl_doc' => 'float',
		'vl_desc' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'cod_mod',
		'cod_sit',
		'ser',
		'sub',
		'num_doc_ini',
		'num_doc_fin',
		'cfop',
		'dt_ref',
		'vl_doc',
		'vl_desc'
	];
}
