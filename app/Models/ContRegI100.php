<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegI100
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property float|null $vl_rec_fin
 * @property string|null $cst
 * @property float|null $vl_tot_ded_ger
 * @property float|null $vl_tot_ded_esp
 * @property float|null $vl_bc_pis
 * @property float|null $aliq_pis
 * @property float|null $vl_pis
 * @property float|null $vl_bc_cofins
 * @property float|null $aliq_cofins
 * @property float|null $vl_cofins
 * @property string|null $inf_comp
 *
 * @package App\Models
 */
class ContRegI100 extends Model
{
	protected $table = 'cont_reg_i100';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_rec_fin' => 'float',
		'vl_tot_ded_ger' => 'float',
		'vl_tot_ded_esp' => 'float',
		'vl_bc_pis' => 'float',
		'aliq_pis' => 'float',
		'vl_pis' => 'float',
		'vl_bc_cofins' => 'float',
		'aliq_cofins' => 'float',
		'vl_cofins' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'vl_rec_fin',
		'cst',
		'vl_tot_ded_ger',
		'vl_tot_ded_esp',
		'vl_bc_pis',
		'aliq_pis',
		'vl_pis',
		'vl_bc_cofins',
		'aliq_cofins',
		'vl_cofins',
		'inf_comp'
	];
}
