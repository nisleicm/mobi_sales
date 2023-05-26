<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegD105
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $ind_nat_frt
 * @property float|null $vl_item
 * @property string|null $cst_cofins
 * @property string|null $nat_bc_cred
 * @property float|null $vl_bc_cofins
 * @property float|null $aliq_cofins
 * @property float|null $vl_cofins
 * @property string|null $cod_cta
 *
 * @package App\Models
 */
class ContRegD105 extends Model
{
	protected $table = 'cont_reg_d105';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_item' => 'float',
		'vl_bc_cofins' => 'float',
		'aliq_cofins' => 'float',
		'vl_cofins' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'ind_nat_frt',
		'vl_item',
		'cst_cofins',
		'nat_bc_cred',
		'vl_bc_cofins',
		'aliq_cofins',
		'vl_cofins',
		'cod_cta'
	];
}
