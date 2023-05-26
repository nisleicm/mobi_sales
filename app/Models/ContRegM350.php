<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegM350
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property float|null $vl_tot_fol
 * @property float|null $vl_exc_bc
 * @property float|null $vl_tot_bc
 * @property float|null $aliq_pis_fol
 * @property float|null $vl_tot_cont_fol
 *
 * @package App\Models
 */
class ContRegM350 extends Model
{
	protected $table = 'cont_reg_m350';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_tot_fol' => 'float',
		'vl_exc_bc' => 'float',
		'vl_tot_bc' => 'float',
		'aliq_pis_fol' => 'float',
		'vl_tot_cont_fol' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'vl_tot_fol',
		'vl_exc_bc',
		'vl_tot_bc',
		'aliq_pis_fol',
		'vl_tot_cont_fol'
	];
}
