<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegC880
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cod_item
 * @property string|null $cfop
 * @property float|null $vl_item
 * @property float|null $vl_desc
 * @property string|null $cst_pis
 * @property float|null $quant_bc_pis
 * @property float|null $aliq_pis_quant
 * @property float|null $vl_pis
 * @property string|null $cst_cofins
 * @property float|null $quant_bc_cofins
 * @property float|null $aliq_cofins_quant
 * @property float|null $vl_cofins
 * @property string|null $cod_cta
 *
 * @package App\Models
 */
class ContRegC880 extends Model
{
	protected $table = 'cont_reg_c880';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_item' => 'float',
		'vl_desc' => 'float',
		'quant_bc_pis' => 'float',
		'aliq_pis_quant' => 'float',
		'vl_pis' => 'float',
		'quant_bc_cofins' => 'float',
		'aliq_cofins_quant' => 'float',
		'vl_cofins' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'cod_item',
		'cfop',
		'vl_item',
		'vl_desc',
		'cst_pis',
		'quant_bc_pis',
		'aliq_pis_quant',
		'vl_pis',
		'cst_cofins',
		'quant_bc_cofins',
		'aliq_cofins_quant',
		'vl_cofins',
		'cod_cta'
	];
}
