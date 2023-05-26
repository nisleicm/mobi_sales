<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg1250
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property float|null $vl_credito_icms_op
 * @property float|null $vl_icms_st_rest
 * @property float|null $vl_fcp_st_rest
 * @property float|null $vl_icms_st_compl
 * @property float|null $vl_fcp_st_compl
 *
 * @package App\Models
 */
class Reg1250 extends Model
{
	protected $table = 'reg_1250';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_credito_icms_op' => 'float',
		'vl_icms_st_rest' => 'float',
		'vl_fcp_st_rest' => 'float',
		'vl_icms_st_compl' => 'float',
		'vl_fcp_st_compl' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'vl_credito_icms_op',
		'vl_icms_st_rest',
		'vl_fcp_st_rest',
		'vl_icms_st_compl',
		'vl_fcp_st_compl'
	];
}
