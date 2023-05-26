<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg1255
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_mot_rest_compl
 * @property float|null $vl_credito_icms_op_mot
 * @property float|null $vl_icms_st_rest_mot
 * @property float|null $vl_fcp_st_rest_mot
 * @property float|null $vl_icms_st_compl_mot
 * @property float|null $vl_fcp_st_compl_mot
 *
 * @package App\Models
 */
class Reg1255 extends Model
{
	protected $table = 'reg_1255';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_credito_icms_op_mot' => 'float',
		'vl_icms_st_rest_mot' => 'float',
		'vl_fcp_st_rest_mot' => 'float',
		'vl_icms_st_compl_mot' => 'float',
		'vl_fcp_st_compl_mot' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_mot_rest_compl',
		'vl_credito_icms_op_mot',
		'vl_icms_st_rest_mot',
		'vl_fcp_st_rest_mot',
		'vl_icms_st_compl_mot',
		'vl_fcp_st_compl_mot'
	];
}
