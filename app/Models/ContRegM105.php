<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegM105
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $nat_bc_cred
 * @property string|null $cst_pis
 * @property float|null $vl_bc_pis_tot
 * @property float|null $vl_bc_pis_cum
 * @property float|null $vl_bc_pis_nc
 * @property float|null $vl_bc_pis
 * @property float|null $quant_bc_pis_tot
 * @property float|null $quant_bc_pis
 * @property string|null $desc_cred
 *
 * @package App\Models
 */
class ContRegM105 extends Model
{
	protected $table = 'cont_reg_m105';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_bc_pis_tot' => 'float',
		'vl_bc_pis_cum' => 'float',
		'vl_bc_pis_nc' => 'float',
		'vl_bc_pis' => 'float',
		'quant_bc_pis_tot' => 'float',
		'quant_bc_pis' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'nat_bc_cred',
		'cst_pis',
		'vl_bc_pis_tot',
		'vl_bc_pis_cum',
		'vl_bc_pis_nc',
		'vl_bc_pis',
		'quant_bc_pis_tot',
		'quant_bc_pis',
		'desc_cred'
	];
}
