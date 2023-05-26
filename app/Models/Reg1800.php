<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg1800
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property float|null $vl_carga
 * @property float|null $vl_pass
 * @property float|null $vl_fat
 * @property float|null $ind_rat
 * @property float|null $vl_icms_ant
 * @property float|null $vl_bc_icms
 * @property float|null $vl_icms_apur
 * @property float|null $vl_bc_icms_apur
 * @property float|null $vl_dif
 *
 * @package App\Models
 */
class Reg1800 extends Model
{
	protected $table = 'reg_1800';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_carga' => 'float',
		'vl_pass' => 'float',
		'vl_fat' => 'float',
		'ind_rat' => 'float',
		'vl_icms_ant' => 'float',
		'vl_bc_icms' => 'float',
		'vl_icms_apur' => 'float',
		'vl_bc_icms_apur' => 'float',
		'vl_dif' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'vl_carga',
		'vl_pass',
		'vl_fat',
		'ind_rat',
		'vl_icms_ant',
		'vl_bc_icms',
		'vl_icms_apur',
		'vl_bc_icms_apur',
		'vl_dif'
	];
}
