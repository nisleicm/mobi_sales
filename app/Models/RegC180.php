<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC180
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_resp_ret
 * @property float|null $quant_conv
 * @property string|null $unid
 * @property float|null $vl_unit_conv
 * @property float|null $vl_unit_icms_op_conv
 * @property float|null $vl_unit_bc_icms_st_conv
 * @property float|null $vl_unit_icms_st_conv
 * @property float|null $vl_unit_fcp_st_conv
 * @property string|null $cod_da
 * @property string|null $num_da
 *
 * @package App\Models
 */
class RegC180 extends Model
{
	protected $table = 'reg_c180';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'quant_conv' => 'float',
		'vl_unit_conv' => 'float',
		'vl_unit_icms_op_conv' => 'float',
		'vl_unit_bc_icms_st_conv' => 'float',
		'vl_unit_icms_st_conv' => 'float',
		'vl_unit_fcp_st_conv' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_resp_ret',
		'quant_conv',
		'unid',
		'vl_unit_conv',
		'vl_unit_icms_op_conv',
		'vl_unit_bc_icms_st_conv',
		'vl_unit_icms_st_conv',
		'vl_unit_fcp_st_conv',
		'cod_da',
		'num_da'
	];
}
