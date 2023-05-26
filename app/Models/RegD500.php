<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegD500
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
 * @property string|null $sub
 * @property string|null $num_doc
 * @property Carbon|null $dt_doc
 * @property Carbon|null $dt_a_p
 * @property float|null $vl_doc
 * @property float|null $vl_desc
 * @property float|null $vl_serv
 * @property float|null $vl_serv_nt
 * @property float|null $vl_terc
 * @property float|null $vl_da
 * @property float|null $vl_bc_icms
 * @property float|null $vl_icms
 * @property string|null $cod_inf
 * @property float|null $vl_pis
 * @property float|null $vl_cofins
 * @property string|null $cod_cta
 * @property string|null $tp_assinante
 *
 * @package App\Models
 */
class RegD500 extends Model
{
	protected $table = 'reg_d500';
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
		'vl_serv_nt' => 'float',
		'vl_terc' => 'float',
		'vl_da' => 'float',
		'vl_bc_icms' => 'float',
		'vl_icms' => 'float',
		'vl_pis' => 'float',
		'vl_cofins' => 'float'
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
		'sub',
		'num_doc',
		'dt_doc',
		'dt_a_p',
		'vl_doc',
		'vl_desc',
		'vl_serv',
		'vl_serv_nt',
		'vl_terc',
		'vl_da',
		'vl_bc_icms',
		'vl_icms',
		'cod_inf',
		'vl_pis',
		'vl_cofins',
		'cod_cta',
		'tp_assinante'
	];
}
