<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegH030
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property float|null $vl_icms_op
 * @property float|null $vl_bc_icms_st
 * @property float|null $vl_icms_st
 * @property float|null $vl_fcp
 *
 * @package App\Models
 */
class RegH030 extends Model
{
	protected $table = 'reg_h030';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_icms_op' => 'float',
		'vl_bc_icms_st' => 'float',
		'vl_icms_st' => 'float',
		'vl_fcp' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'vl_icms_op',
		'vl_bc_icms_st',
		'vl_icms_st',
		'vl_fcp'
	];
}
