<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegD101
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $ind_nat_frt
 * @property float|null $vl_item
 * @property string|null $cst_pis
 * @property string|null $nat_bc_cred
 * @property float|null $vl_bc_pis
 * @property float|null $aliq_pis
 * @property float|null $vl_pis
 * @property string|null $cod_cta
 *
 * @package App\Models
 */
class ContRegD101 extends Model
{
	protected $table = 'cont_reg_d101';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_item' => 'float',
		'vl_bc_pis' => 'float',
		'aliq_pis' => 'float',
		'vl_pis' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'ind_nat_frt',
		'vl_item',
		'cst_pis',
		'nat_bc_cred',
		'vl_bc_pis',
		'aliq_pis',
		'vl_pis',
		'cod_cta'
	];
}
