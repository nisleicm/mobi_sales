<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegF150
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $nat_bc_cred
 * @property float|null $vl_tot_est
 * @property float|null $est_imp
 * @property float|null $vl_bc_est
 * @property float|null $vl_bc_men_est
 * @property string|null $cst_pis
 * @property float|null $aliq_pis
 * @property float|null $vl_cred_pis
 * @property string|null $cst_cofins
 * @property float|null $aliq_cofins
 * @property float|null $vl_cred_cofins
 * @property string|null $desc_est
 * @property string|null $cod_cta
 *
 * @package App\Models
 */
class ContRegF150 extends Model
{
	protected $table = 'cont_reg_f150';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_tot_est' => 'float',
		'est_imp' => 'float',
		'vl_bc_est' => 'float',
		'vl_bc_men_est' => 'float',
		'aliq_pis' => 'float',
		'vl_cred_pis' => 'float',
		'aliq_cofins' => 'float',
		'vl_cred_cofins' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'nat_bc_cred',
		'vl_tot_est',
		'est_imp',
		'vl_bc_est',
		'vl_bc_men_est',
		'cst_pis',
		'aliq_pis',
		'vl_cred_pis',
		'cst_cofins',
		'aliq_cofins',
		'vl_cred_cofins',
		'desc_est',
		'cod_cta'
	];
}
