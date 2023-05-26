<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegB470
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property float|null $vl_cont
 * @property float|null $vl_mat_terc
 * @property float|null $vl_mat_prop
 * @property float|null $vl_sub
 * @property float|null $vl_isnt
 * @property float|null $vl_ded_bc
 * @property float|null $vl_bc_iss
 * @property float|null $vl_bc_iss_rt
 * @property float|null $vl_iss
 * @property float|null $vl_iss_rt
 * @property float|null $vl_ded
 * @property float|null $vl_iss_rec
 * @property float|null $vl_iss_st
 * @property float|null $vl_iss_rec_uni
 *
 * @package App\Models
 */
class RegB470 extends Model
{
	protected $table = 'reg_b470';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_cont' => 'float',
		'vl_mat_terc' => 'float',
		'vl_mat_prop' => 'float',
		'vl_sub' => 'float',
		'vl_isnt' => 'float',
		'vl_ded_bc' => 'float',
		'vl_bc_iss' => 'float',
		'vl_bc_iss_rt' => 'float',
		'vl_iss' => 'float',
		'vl_iss_rt' => 'float',
		'vl_ded' => 'float',
		'vl_iss_rec' => 'float',
		'vl_iss_st' => 'float',
		'vl_iss_rec_uni' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'vl_cont',
		'vl_mat_terc',
		'vl_mat_prop',
		'vl_sub',
		'vl_isnt',
		'vl_ded_bc',
		'vl_bc_iss',
		'vl_bc_iss_rt',
		'vl_iss',
		'vl_iss_rt',
		'vl_ded',
		'vl_iss_rec',
		'vl_iss_st',
		'vl_iss_rec_uni'
	];
}
