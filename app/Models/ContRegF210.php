<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegF210
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property float|null $vl_cus_orc
 * @property float|null $vl_exc
 * @property float|null $vl_cus_orc_aju
 * @property float|null $vl_bc_cred
 * @property string|null $cst_pis
 * @property float|null $aliq_pis
 * @property float|null $vl_cred_pis_util
 * @property string|null $cst_cofins
 * @property float|null $aliq_cofins
 * @property float|null $vl_cred_cofins_util
 *
 * @package App\Models
 */
class ContRegF210 extends Model
{
	protected $table = 'cont_reg_f210';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_cus_orc' => 'float',
		'vl_exc' => 'float',
		'vl_cus_orc_aju' => 'float',
		'vl_bc_cred' => 'float',
		'aliq_pis' => 'float',
		'vl_cred_pis_util' => 'float',
		'aliq_cofins' => 'float',
		'vl_cred_cofins_util' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'vl_cus_orc',
		'vl_exc',
		'vl_cus_orc_aju',
		'vl_bc_cred',
		'cst_pis',
		'aliq_pis',
		'vl_cred_pis_util',
		'cst_cofins',
		'aliq_cofins',
		'vl_cred_cofins_util'
	];
}
