<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC500
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
 * @property string|null $cod_cons
 * @property string|null $num_doc
 * @property Carbon|null $dt_doc
 * @property Carbon|null $dt_e_s
 * @property float|null $vl_doc
 * @property float|null $vl_desc
 * @property float|null $vl_forn
 * @property float|null $vl_serv_nt
 * @property float|null $vl_terc
 * @property float|null $vl_da
 * @property float|null $vl_bc_icms
 * @property float|null $vl_icms
 * @property float|null $vl_bc_icms_st
 * @property float|null $vl_icms_st
 * @property string|null $cod_inf
 * @property float|null $vl_pis
 * @property float|null $vl_cofins
 * @property string|null $tp_ligacao
 * @property string|null $cod_grupo_tensao
 * @property string|null $chv_doce
 * @property string|null $fin_doce
 * @property string|null $chv_doce_ref
 * @property string|null $ind_dest
 * @property string|null $cod_mun_dest
 * @property string|null $cod_cta
 *
 * @package App\Models
 */
class RegC500 extends Model
{
	protected $table = 'reg_c500';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_doc' => 'datetime',
		'dt_e_s' => 'datetime',
		'vl_doc' => 'float',
		'vl_desc' => 'float',
		'vl_forn' => 'float',
		'vl_serv_nt' => 'float',
		'vl_terc' => 'float',
		'vl_da' => 'float',
		'vl_bc_icms' => 'float',
		'vl_icms' => 'float',
		'vl_bc_icms_st' => 'float',
		'vl_icms_st' => 'float',
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
		'cod_cons',
		'num_doc',
		'dt_doc',
		'dt_e_s',
		'vl_doc',
		'vl_desc',
		'vl_forn',
		'vl_serv_nt',
		'vl_terc',
		'vl_da',
		'vl_bc_icms',
		'vl_icms',
		'vl_bc_icms_st',
		'vl_icms_st',
		'cod_inf',
		'vl_pis',
		'vl_cofins',
		'tp_ligacao',
		'cod_grupo_tensao',
		'chv_doce',
		'fin_doce',
		'chv_doce_ref',
		'ind_dest',
		'cod_mun_dest',
		'cod_cta'
	];
}
