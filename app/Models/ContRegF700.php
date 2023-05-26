<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegF700
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $ind_ori_ded
 * @property string|null $ind_nat_ded
 * @property float|null $vl_ded_pis
 * @property float|null $vl_ded_cofins
 * @property float|null $vl_bc_oper
 * @property string|null $cnpj
 * @property string|null $inf_comp
 *
 * @package App\Models
 */
class ContRegF700 extends Model
{
	protected $table = 'cont_reg_f700';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_ded_pis' => 'float',
		'vl_ded_cofins' => 'float',
		'vl_bc_oper' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'ind_ori_ded',
		'ind_nat_ded',
		'vl_ded_pis',
		'vl_ded_cofins',
		'vl_bc_oper',
		'cnpj',
		'inf_comp'
	];
}
