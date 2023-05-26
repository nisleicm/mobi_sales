<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegF100
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $ind_oper
 * @property string|null $cod_part
 * @property string|null $cod_item
 * @property Carbon|null $dt_oper
 * @property float|null $vl_oper
 * @property string|null $cst_pis
 * @property float|null $vl_bc_pis
 * @property float|null $aliq_pis
 * @property float|null $vl_pis
 * @property string|null $cst_cofins
 * @property float|null $vl_bc_cofins
 * @property float|null $aliq_cofins
 * @property float|null $vl_cofins
 * @property string|null $nat_bc_cred
 * @property string|null $ind_orig_cred
 * @property string|null $cod_cta
 * @property string|null $cod_ccus
 * @property string|null $desc_doc_oper
 *
 * @package App\Models
 */
class ContRegF100 extends Model
{
	protected $table = 'cont_reg_f100';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_oper' => 'datetime',
		'vl_oper' => 'float',
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
		'ind_oper',
		'cod_part',
		'cod_item',
		'dt_oper',
		'vl_oper',
		'cst_pis',
		'vl_bc_pis',
		'aliq_pis',
		'vl_pis',
		'cst_cofins',
		'vl_bc_cofins',
		'aliq_cofins',
		'vl_cofins',
		'nat_bc_cred',
		'ind_orig_cred',
		'cod_cta',
		'cod_ccus',
		'desc_doc_oper'
	];
}
