<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegD300
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_mod
 * @property string|null $ser
 * @property string|null $sub
 * @property string|null $num_doc_ini
 * @property string|null $num_doc_fin
 * @property string|null $cst_icms
 * @property string|null $cfop
 * @property float|null $aliq_icms
 * @property Carbon|null $dt_doc
 * @property float|null $vl_opr
 * @property float|null $vl_desc
 * @property float|null $vl_serv
 * @property float|null $vl_seg
 * @property float|null $vl_out_desp
 * @property float|null $vl_bc_icms
 * @property float|null $vl_icms
 * @property float|null $vl_red_bc
 * @property string|null $cod_obs
 * @property string|null $cod_cta
 *
 * @package App\Models
 */
class RegD300 extends Model
{
	protected $table = 'reg_d300';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'aliq_icms' => 'float',
		'dt_doc' => 'datetime',
		'vl_opr' => 'float',
		'vl_desc' => 'float',
		'vl_serv' => 'float',
		'vl_seg' => 'float',
		'vl_out_desp' => 'float',
		'vl_bc_icms' => 'float',
		'vl_icms' => 'float',
		'vl_red_bc' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_mod',
		'ser',
		'sub',
		'num_doc_ini',
		'num_doc_fin',
		'cst_icms',
		'cfop',
		'aliq_icms',
		'dt_doc',
		'vl_opr',
		'vl_desc',
		'vl_serv',
		'vl_seg',
		'vl_out_desp',
		'vl_bc_icms',
		'vl_icms',
		'vl_red_bc',
		'cod_obs',
		'cod_cta'
	];
}
