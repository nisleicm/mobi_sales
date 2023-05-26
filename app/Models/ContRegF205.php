<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegF205
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property float|null $vl_cus_inc_acum_ant
 * @property float|null $vl_cus_inc_per_esc
 * @property float|null $vl_cus_inc_acum
 * @property float|null $vl_exc_bc_cus_inc_acum
 * @property float|null $vl_bc_cus_inc
 * @property string|null $cst_pis
 * @property float|null $aliq_pis
 * @property float|null $vl_cred_pis_acum
 * @property float|null $vl_cred_pis_desc_ant
 * @property float|null $vl_cred_pis_desc
 * @property float|null $vl_cred_pis_desc_fut
 * @property string|null $cst_cofins
 * @property float|null $aliq_cofins
 * @property float|null $vl_cred_cofins_acum
 * @property float|null $vl_cred_cofins_desc_ant
 * @property float|null $vl_cred_cofins_desc
 * @property float|null $vl_cred_cofins_desc_fut
 *
 * @package App\Models
 */
class ContRegF205 extends Model
{
	protected $table = 'cont_reg_f205';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_cus_inc_acum_ant' => 'float',
		'vl_cus_inc_per_esc' => 'float',
		'vl_cus_inc_acum' => 'float',
		'vl_exc_bc_cus_inc_acum' => 'float',
		'vl_bc_cus_inc' => 'float',
		'aliq_pis' => 'float',
		'vl_cred_pis_acum' => 'float',
		'vl_cred_pis_desc_ant' => 'float',
		'vl_cred_pis_desc' => 'float',
		'vl_cred_pis_desc_fut' => 'float',
		'aliq_cofins' => 'float',
		'vl_cred_cofins_acum' => 'float',
		'vl_cred_cofins_desc_ant' => 'float',
		'vl_cred_cofins_desc' => 'float',
		'vl_cred_cofins_desc_fut' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'vl_cus_inc_acum_ant',
		'vl_cus_inc_per_esc',
		'vl_cus_inc_acum',
		'vl_exc_bc_cus_inc_acum',
		'vl_bc_cus_inc',
		'cst_pis',
		'aliq_pis',
		'vl_cred_pis_acum',
		'vl_cred_pis_desc_ant',
		'vl_cred_pis_desc',
		'vl_cred_pis_desc_fut',
		'cst_cofins',
		'aliq_cofins',
		'vl_cred_cofins_acum',
		'vl_cred_cofins_desc_ant',
		'vl_cred_cofins_desc',
		'vl_cred_cofins_desc_fut'
	];
}
