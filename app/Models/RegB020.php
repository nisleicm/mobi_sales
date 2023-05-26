<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegB020
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $ind_oper
 * @property string|null $ind_emit
 * @property string|null $cod_part
 * @property string|null $cod_mod
 * @property string|null $cod_sit
 * @property string|null $ser
 * @property string|null $num_doc
 * @property string|null $chv_nfe
 * @property Carbon|null $dt_doc
 * @property string|null $cod_mun_serv
 * @property float|null $vl_cont
 * @property float|null $vl_mat_terc
 * @property float|null $vl_sub
 * @property float|null $vl_isnt_iss
 * @property float|null $vl_ded_bc
 * @property float|null $vl_bc_iss
 * @property float|null $vl_bc_iss_rt
 * @property float|null $vl_iss_rt
 * @property float|null $vl_iss
 * @property string|null $cod_inf_obs
 *
 * @package App\Models
 */
class RegB020 extends Model
{
	protected $table = 'reg_b020';
	public $timestamps = false;

	protected $casts = [
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_doc' => 'datetime',
		'vl_cont' => 'float',
		'vl_mat_terc' => 'float',
		'vl_sub' => 'float',
		'vl_isnt_iss' => 'float',
		'vl_ded_bc' => 'float',
		'vl_bc_iss' => 'float',
		'vl_bc_iss_rt' => 'float',
		'vl_iss_rt' => 'float',
		'vl_iss' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'ind_oper',
		'ind_emit',
		'cod_part',
		'cod_mod',
		'cod_sit',
		'ser',
		'num_doc',
		'chv_nfe',
		'dt_doc',
		'cod_mun_serv',
		'vl_cont',
		'vl_mat_terc',
		'vl_sub',
		'vl_isnt_iss',
		'vl_ded_bc',
		'vl_bc_iss',
		'vl_bc_iss_rt',
		'vl_iss_rt',
		'vl_iss',
		'cod_inf_obs'
	];
}
