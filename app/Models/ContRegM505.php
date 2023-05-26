<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegM505
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $nat_bc_cred
 * @property string|null $cst_cofins
 * @property float|null $vl_bc_cofins_tot
 * @property float|null $vl_bc_cofins_cum
 * @property float|null $vl_bc_cofins_nc
 * @property float|null $vl_bc_cofins
 * @property float|null $quant_bc_cofins_tot
 * @property float|null $quant_bc_cofins
 * @property string|null $desc_cred
 *
 * @package App\Models
 */
class ContRegM505 extends Model
{
	protected $table = 'cont_reg_m505';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_bc_cofins_tot' => 'float',
		'vl_bc_cofins_cum' => 'float',
		'vl_bc_cofins_nc' => 'float',
		'vl_bc_cofins' => 'float',
		'quant_bc_cofins_tot' => 'float',
		'quant_bc_cofins' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'nat_bc_cred',
		'cst_cofins',
		'vl_bc_cofins_tot',
		'vl_bc_cofins_cum',
		'vl_bc_cofins_nc',
		'vl_bc_cofins',
		'quant_bc_cofins_tot',
		'quant_bc_cofins',
		'desc_cred'
	];
}
