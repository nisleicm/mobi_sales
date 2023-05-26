<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContReg1700
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $ind_nat_ret
 * @property string|null $pr_rec_ret
 * @property float|null $vl_ret_apu
 * @property float|null $vl_ret_ded
 * @property float|null $vl_ret_per
 * @property float|null $vl_ret_dcomp
 * @property float|null $sld_ret
 *
 * @package App\Models
 */
class ContReg1700 extends Model
{
	protected $table = 'cont_reg_1700';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_ret_apu' => 'float',
		'vl_ret_ded' => 'float',
		'vl_ret_per' => 'float',
		'vl_ret_dcomp' => 'float',
		'sld_ret' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'ind_nat_ret',
		'pr_rec_ret',
		'vl_ret_apu',
		'vl_ret_ded',
		'vl_ret_per',
		'vl_ret_dcomp',
		'sld_ret'
	];
}
