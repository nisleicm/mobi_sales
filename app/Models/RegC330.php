<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC330
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_mot_rest_compl
 * @property float|null $quant_conv
 * @property string|null $unid
 * @property float|null $vl_unit_conv
 * @property float|null $vl_unit_icms_na_operacao_conv
 * @property float|null $vl_unit_icms_op_conv
 * @property float|null $vl_unit_bc_icms_st_estoque_conv
 * @property float|null $vl_unit_icms_st_estoque_conv
 * @property float|null $vl_unit_fcp_icms_st_estoque_con
 * @property float|null $vl_unit_icms_st_conv_rest
 * @property float|null $vl_unit_fcp_st_conv_rest
 * @property float|null $vl_unit_icms_st_conv_compl
 * @property float|null $vl_unit_fcp_st_conv_compl
 *
 * @package App\Models
 */
class RegC330 extends Model
{
	protected $table = 'reg_c330';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'quant_conv' => 'float',
		'vl_unit_conv' => 'float',
		'vl_unit_icms_na_operacao_conv' => 'float',
		'vl_unit_icms_op_conv' => 'float',
		'vl_unit_bc_icms_st_estoque_conv' => 'float',
		'vl_unit_icms_st_estoque_conv' => 'float',
		'vl_unit_fcp_icms_st_estoque_con' => 'float',
		'vl_unit_icms_st_conv_rest' => 'float',
		'vl_unit_fcp_st_conv_rest' => 'float',
		'vl_unit_icms_st_conv_compl' => 'float',
		'vl_unit_fcp_st_conv_compl' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_mot_rest_compl',
		'quant_conv',
		'unid',
		'vl_unit_conv',
		'vl_unit_icms_na_operacao_conv',
		'vl_unit_icms_op_conv',
		'vl_unit_bc_icms_st_estoque_conv',
		'vl_unit_icms_st_estoque_conv',
		'vl_unit_fcp_icms_st_estoque_con',
		'vl_unit_icms_st_conv_rest',
		'vl_unit_fcp_st_conv_rest',
		'vl_unit_icms_st_conv_compl',
		'vl_unit_fcp_st_conv_compl'
	];
}
