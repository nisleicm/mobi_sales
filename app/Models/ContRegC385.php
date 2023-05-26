<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegC385
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cst_cofins
 * @property string|null $cod_item
 * @property float|null $vl_item
 * @property float|null $vl_bc_cofins
 * @property float|null $aliq_cofins
 * @property float|null $quant_bc_cofins
 * @property float|null $aliq_cofins_quant
 * @property float|null $vl_cofins
 * @property string|null $cod_cta
 *
 * @package App\Models
 */
class ContRegC385 extends Model
{
	protected $table = 'cont_reg_c385';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_item' => 'float',
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
		'cst_cofins',
		'cod_item',
		'vl_item',
		'vl_bc_cofins',
		'aliq_cofins',
		'quant_bc_cofins',
		'aliq_cofins_quant',
		'vl_cofins',
		'cod_cta'
	];
}
