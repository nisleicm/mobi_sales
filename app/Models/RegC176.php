<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC176
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_mod_ult_e
 * @property string|null $num_doc_ult_e
 * @property string|null $ser_ult_e
 * @property Carbon|null $dt_ult_e
 * @property string|null $cod_part_ult_e
 * @property float|null $quant_ult_e
 * @property float|null $vl_unit_ult_e
 * @property float|null $vl_unit_bc_st
 * @property string|null $chave_nfe_ult_e
 * @property string|null $num_item_ult_e
 * @property float|null $vl_unit_bc_icms_ult_e
 * @property float|null $aliq_icms_ult_e
 * @property float|null $vl_unit_limite_bc_icms_ult_e
 * @property float|null $vl_unit_icms_ult_e
 * @property float|null $aliq_st_ult_e
 * @property float|null $vl_unit_res
 * @property string|null $cod_resp_ret
 * @property string|null $cod_mot_res
 * @property string|null $chave_nfe_ret
 * @property string|null $cod_part_nfe_ret
 * @property string|null $ser_nfe_ret
 * @property string|null $num_nfe_ret
 * @property string|null $item_nfe_ret
 * @property string|null $cod_da
 * @property string|null $num_da
 * @property float|null $vl_unit_res_fcp_st
 *
 * @package App\Models
 */
class RegC176 extends Model
{
	protected $table = 'reg_c176';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_ult_e' => 'datetime',
		'quant_ult_e' => 'float',
		'vl_unit_ult_e' => 'float',
		'vl_unit_bc_st' => 'float',
		'vl_unit_bc_icms_ult_e' => 'float',
		'aliq_icms_ult_e' => 'float',
		'vl_unit_limite_bc_icms_ult_e' => 'float',
		'vl_unit_icms_ult_e' => 'float',
		'aliq_st_ult_e' => 'float',
		'vl_unit_res' => 'float',
		'vl_unit_res_fcp_st' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_mod_ult_e',
		'num_doc_ult_e',
		'ser_ult_e',
		'dt_ult_e',
		'cod_part_ult_e',
		'quant_ult_e',
		'vl_unit_ult_e',
		'vl_unit_bc_st',
		'chave_nfe_ult_e',
		'num_item_ult_e',
		'vl_unit_bc_icms_ult_e',
		'aliq_icms_ult_e',
		'vl_unit_limite_bc_icms_ult_e',
		'vl_unit_icms_ult_e',
		'aliq_st_ult_e',
		'vl_unit_res',
		'cod_resp_ret',
		'cod_mot_res',
		'chave_nfe_ret',
		'cod_part_nfe_ret',
		'ser_nfe_ret',
		'num_nfe_ret',
		'item_nfe_ret',
		'cod_da',
		'num_da',
		'vl_unit_res_fcp_st'
	];
}
