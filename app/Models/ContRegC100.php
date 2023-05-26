<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegC100
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
 * @property string|null $num_doc
 * @property string|null $chv_nfe
 * @property Carbon|null $dt_doc
 * @property Carbon|null $dt_e_s
 * @property float|null $vl_doc
 * @property string|null $ind_pgto
 * @property float|null $vl_desc
 * @property float|null $vl_abat_nt
 * @property float|null $vl_merc
 * @property string|null $ind_frt
 * @property float|null $vl_frt
 * @property float|null $vl_seg
 * @property float|null $vl_out_da
 * @property float|null $vl_bc_icms
 * @property float|null $vl_icms
 * @property float|null $vl_bc_icms_st
 * @property float|null $vl_icms_st
 * @property float|null $vl_ipi
 * @property float|null $vl_pis
 * @property float|null $vl_cofins
 * @property float|null $vl_pis_st
 * @property float|null $vl_cofins_st
 *
 * @package App\Models
 */
class ContRegC100 extends Model
{
	protected $table = 'cont_reg_c100';
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
		'vl_abat_nt' => 'float',
		'vl_merc' => 'float',
		'vl_frt' => 'float',
		'vl_seg' => 'float',
		'vl_out_da' => 'float',
		'vl_bc_icms' => 'float',
		'vl_icms' => 'float',
		'vl_bc_icms_st' => 'float',
		'vl_icms_st' => 'float',
		'vl_ipi' => 'float',
		'vl_pis' => 'float',
		'vl_cofins' => 'float',
		'vl_pis_st' => 'float',
		'vl_cofins_st' => 'float'
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
		'num_doc',
		'chv_nfe',
		'dt_doc',
		'dt_e_s',
		'vl_doc',
		'ind_pgto',
		'vl_desc',
		'vl_abat_nt',
		'vl_merc',
		'ind_frt',
		'vl_frt',
		'vl_seg',
		'vl_out_da',
		'vl_bc_icms',
		'vl_icms',
		'vl_bc_icms_st',
		'vl_icms_st',
		'vl_ipi',
		'vl_pis',
		'vl_cofins',
		'vl_pis_st',
		'vl_cofins_st'
	];
}
