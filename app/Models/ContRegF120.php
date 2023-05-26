<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegF120
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $nat_bc_cred
 * @property string|null $ident_bem_imob
 * @property string|null $ind_orig_cred
 * @property string|null $ind_util_bem_imob
 * @property float|null $vl_oper_dep
 * @property float|null $parc_oper_nao_bc_cred
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
 * @property string|null $desc_bem_imob
 *
 * @package App\Models
 */
class ContRegF120 extends Model
{
	protected $table = 'cont_reg_f120';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_oper_dep' => 'float',
		'parc_oper_nao_bc_cred' => 'float',
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
		'nat_bc_cred',
		'ident_bem_imob',
		'ind_orig_cred',
		'ind_util_bem_imob',
		'vl_oper_dep',
		'parc_oper_nao_bc_cred',
		'cst_pis',
		'vl_bc_pis',
		'aliq_pis',
		'vl_pis',
		'cst_cofins',
		'vl_bc_cofins',
		'aliq_cofins',
		'vl_cofins',
		'cod_cta',
		'cod_ccus',
		'desc_bem_imob'
	];
}
