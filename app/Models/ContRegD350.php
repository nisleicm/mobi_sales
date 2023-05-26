<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegD350
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cod_mod
 * @property string|null $ecf_mod
 * @property string|null $ecf_fab
 * @property Carbon|null $dt_doc
 * @property string|null $cro
 * @property string|null $crz
 * @property string|null $num_coo_fin
 * @property float|null $gt_fin
 * @property float|null $vl_brt
 * @property string|null $cst_pis
 * @property float|null $vl_bc_pis
 * @property float|null $aliq_pis
 * @property float|null $quant_bc_pis
 * @property float|null $aliq_pis_quant
 * @property float|null $vl_pis
 * @property string|null $cst_cofins
 * @property float|null $vl_bc_cofins
 * @property float|null $aliq_cofins
 * @property float|null $quant_bc_cofins
 * @property float|null $aliq_cofins_quant
 * @property float|null $vl_cofins
 * @property string|null $cod_cta
 *
 * @package App\Models
 */
class ContRegD350 extends Model
{
	protected $table = 'cont_reg_d350';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_doc' => 'datetime',
		'gt_fin' => 'float',
		'vl_brt' => 'float',
		'vl_bc_pis' => 'float',
		'aliq_pis' => 'float',
		'quant_bc_pis' => 'float',
		'aliq_pis_quant' => 'float',
		'vl_pis' => 'float',
		'vl_bc_cofins' => 'float',
		'aliq_cofins' => 'float',
		'quant_bc_cofins' => 'float',
		'aliq_cofins_quant' => 'float',
		'vl_cofins' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'cod_mod',
		'ecf_mod',
		'ecf_fab',
		'dt_doc',
		'cro',
		'crz',
		'num_coo_fin',
		'gt_fin',
		'vl_brt',
		'cst_pis',
		'vl_bc_pis',
		'aliq_pis',
		'quant_bc_pis',
		'aliq_pis_quant',
		'vl_pis',
		'cst_cofins',
		'vl_bc_cofins',
		'aliq_cofins',
		'quant_bc_cofins',
		'aliq_cofins_quant',
		'vl_cofins',
		'cod_cta'
	];
}
