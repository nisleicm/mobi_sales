<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegA170
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $num_item
 * @property string|null $cod_item
 * @property string|null $descr_compl
 * @property float|null $vl_item
 * @property float|null $vl_desc
 * @property string|null $nat_bc_cred
 * @property string|null $ind_orig_cred
 * @property string|null $cst_pis
 * @property float|null $vl_bc_pis
 * @property float|null $aliq_pis
 * @property float|null $vl_pis
 * @property string|null $cst_cofins
 * @property float|null $vl_bc_cofins
 * @property float|null $aliq_cofins
 * @property float|null $vl_cofins
 * @property string|null $cod_cta
 * @property string|null $cod_ccus
 *
 * @package App\Models
 */
class ContRegA170 extends Model
{
	protected $table = 'cont_reg_a170';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_item' => 'float',
		'vl_desc' => 'float',
		'vl_bc_pis' => 'float',
		'aliq_pis' => 'float',
		'vl_pis' => 'float',
		'vl_bc_cofins' => 'float',
		'aliq_cofins' => 'float',
		'vl_cofins' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'num_item',
		'cod_item',
		'descr_compl',
		'vl_item',
		'vl_desc',
		'nat_bc_cred',
		'ind_orig_cred',
		'cst_pis',
		'vl_bc_pis',
		'aliq_pis',
		'vl_pis',
		'cst_cofins',
		'vl_bc_cofins',
		'aliq_cofins',
		'vl_cofins',
		'cod_cta',
		'cod_ccus'
	];
}
