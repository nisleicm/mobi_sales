<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC690
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cst_icms
 * @property string|null $cfop
 * @property float|null $aliq_icms
 * @property float|null $vl_opr
 * @property float|null $vl_bc_icms
 * @property float|null $vl_icms
 * @property float|null $vl_red_bc
 * @property float|null $vl_bc_icms_st
 * @property float|null $vl_icms_st
 * @property string|null $cod_obs
 *
 * @package App\Models
 */
class RegC690 extends Model
{
	protected $table = 'reg_c690';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'aliq_icms' => 'float',
		'vl_opr' => 'float',
		'vl_bc_icms' => 'float',
		'vl_icms' => 'float',
		'vl_red_bc' => 'float',
		'vl_bc_icms_st' => 'float',
		'vl_icms_st' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cst_icms',
		'cfop',
		'aliq_icms',
		'vl_opr',
		'vl_bc_icms',
		'vl_icms',
		'vl_red_bc',
		'vl_bc_icms_st',
		'vl_icms_st',
		'cod_obs'
	];
}
