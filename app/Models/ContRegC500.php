<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegC500
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cod_part
 * @property string|null $cod_mod
 * @property string|null $cod_sit
 * @property string|null $ser
 * @property string|null $sub
 * @property string|null $num_doc
 * @property Carbon|null $dt_doc
 * @property Carbon|null $dt_e_s
 * @property float|null $vl_doc
 * @property float|null $vl_icms
 * @property string|null $cod_inf
 * @property float|null $vl_pis
 * @property float|null $vl_cofins
 * @property string|null $chv_doc_e
 *
 * @package App\Models
 */
class ContRegC500 extends Model
{
	protected $table = 'cont_reg_c500';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_doc' => 'datetime',
		'dt_e_s' => 'datetime',
		'vl_doc' => 'float',
		'vl_icms' => 'float',
		'vl_pis' => 'float',
		'vl_cofins' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'cod_part',
		'cod_mod',
		'cod_sit',
		'ser',
		'sub',
		'num_doc',
		'dt_doc',
		'dt_e_s',
		'vl_doc',
		'vl_icms',
		'cod_inf',
		'vl_pis',
		'vl_cofins',
		'chv_doc_e'
	];
}
