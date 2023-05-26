<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegD100
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $ind_oper
 * @property string|null $ind_emit
 * @property string|null $cod_part
 * @property string|null $cod_mod
 * @property string|null $cod_sit
 * @property string|null $ser
 * @property string|null $sub
 * @property string|null $num_doc
 * @property string|null $chv_cte
 * @property Carbon|null $dt_doc
 * @property Carbon|null $dt_a_p
 * @property string|null $tp_cte
 * @property string|null $chv_cte_ref
 * @property float|null $vl_doc
 * @property float|null $vl_desc
 * @property string|null $ind_frt
 * @property float|null $vl_serv
 * @property float|null $vl_bc_icms
 * @property float|null $vl_icms
 * @property float|null $vl_nt
 * @property string|null $cod_inf
 * @property string|null $cod_cta
 *
 * @package App\Models
 */
class ContRegD100 extends Model
{
	protected $table = 'cont_reg_d100';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_doc' => 'datetime',
		'dt_a_p' => 'datetime',
		'vl_doc' => 'float',
		'vl_desc' => 'float',
		'vl_serv' => 'float',
		'vl_bc_icms' => 'float',
		'vl_icms' => 'float',
		'vl_nt' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'ind_oper',
		'ind_emit',
		'cod_part',
		'cod_mod',
		'cod_sit',
		'ser',
		'sub',
		'num_doc',
		'chv_cte',
		'dt_doc',
		'dt_a_p',
		'tp_cte',
		'chv_cte_ref',
		'vl_doc',
		'vl_desc',
		'ind_frt',
		'vl_serv',
		'vl_bc_icms',
		'vl_icms',
		'vl_nt',
		'cod_inf',
		'cod_cta'
	];
}
