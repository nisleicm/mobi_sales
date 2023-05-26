<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegM610
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cod_cont
 * @property float|null $vl_rec_brt
 * @property float|null $vl_bc_cont
 * @property float|null $vl_ajus_acres_bc
 * @property float|null $vl_ajus_reduc_bc
 * @property float|null $vl_bc_cont_ajus
 * @property float|null $aliq_cofins
 * @property float|null $quant_bc_cofins
 * @property float|null $aliq_cofins_quant
 * @property float|null $vl_cont_apur
 * @property float|null $vl_ajus_acres
 * @property float|null $vl_ajus_reduc
 * @property float|null $vl_cont_difer
 * @property float|null $vl_cont_difer_ant
 * @property float|null $vl_cont_per
 *
 * @package App\Models
 */
class ContRegM610 extends Model
{
	protected $table = 'cont_reg_m610';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_rec_brt' => 'float',
		'vl_bc_cont' => 'float',
		'vl_ajus_acres_bc' => 'float',
		'vl_ajus_reduc_bc' => 'float',
		'vl_bc_cont_ajus' => 'float',
		'aliq_cofins' => 'float',
		'quant_bc_cofins' => 'float',
		'aliq_cofins_quant' => 'float',
		'vl_cont_apur' => 'float',
		'vl_ajus_acres' => 'float',
		'vl_ajus_reduc' => 'float',
		'vl_cont_difer' => 'float',
		'vl_cont_difer_ant' => 'float',
		'vl_cont_per' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'cod_cont',
		'vl_rec_brt',
		'vl_bc_cont',
		'vl_ajus_acres_bc',
		'vl_ajus_reduc_bc',
		'vl_bc_cont_ajus',
		'aliq_cofins',
		'quant_bc_cofins',
		'aliq_cofins_quant',
		'vl_cont_apur',
		'vl_ajus_acres',
		'vl_ajus_reduc',
		'vl_cont_difer',
		'vl_cont_difer_ant',
		'vl_cont_per'
	];
}
