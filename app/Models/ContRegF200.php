<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegF200
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $ind_oper
 * @property string|null $unid_imob
 * @property string|null $ident_emp
 * @property string|null $desc_unid_imob
 * @property string|null $num_cont
 * @property string|null $cpf_cnpj_adqu
 * @property Carbon|null $dt_oper
 * @property float|null $vl_tot_vend
 * @property float|null $vl_rec_acum
 * @property float|null $vl_tot_rec
 * @property string|null $cst_pis
 * @property float|null $vl_bc_pis
 * @property float|null $aliq_pis
 * @property float|null $vl_pis
 * @property string|null $cst_cofins
 * @property float|null $vl_bc_cofins
 * @property float|null $aliq_cofins
 * @property float|null $vl_cofins
 * @property float|null $perc_rec_receb
 * @property string|null $ind_nat_emp
 * @property string|null $inf_comp
 *
 * @package App\Models
 */
class ContRegF200 extends Model
{
	protected $table = 'cont_reg_f200';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_oper' => 'datetime',
		'vl_tot_vend' => 'float',
		'vl_rec_acum' => 'float',
		'vl_tot_rec' => 'float',
		'vl_bc_pis' => 'float',
		'aliq_pis' => 'float',
		'vl_pis' => 'float',
		'vl_bc_cofins' => 'float',
		'aliq_cofins' => 'float',
		'vl_cofins' => 'float',
		'perc_rec_receb' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'ind_oper',
		'unid_imob',
		'ident_emp',
		'desc_unid_imob',
		'num_cont',
		'cpf_cnpj_adqu',
		'dt_oper',
		'vl_tot_vend',
		'vl_rec_acum',
		'vl_tot_rec',
		'cst_pis',
		'vl_bc_pis',
		'aliq_pis',
		'vl_pis',
		'cst_cofins',
		'vl_bc_cofins',
		'aliq_cofins',
		'vl_cofins',
		'perc_rec_receb',
		'ind_nat_emp',
		'inf_comp'
	];
}
