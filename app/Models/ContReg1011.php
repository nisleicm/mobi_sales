<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContReg1011
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cont_reg_ref
 * @property string|null $chave_doc
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
 * @property string|null $cst_pis_susp
 * @property float|null $vl_bc_pis_susp
 * @property float|null $aliq_pis_susp
 * @property float|null $vl_pis_susp
 * @property string|null $cst_cofins_susp
 * @property float|null $vl_bc_cofins_susp
 * @property float|null $aliq_cofins_susp
 * @property float|null $vl_cofins_susp
 * @property string|null $cod_cta
 * @property string|null $cod_ccus
 * @property string|null $desc_doc_oper
 *
 * @package App\Models
 */
class ContReg1011 extends Model
{
	protected $table = 'cont_reg_1011';
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
		'vl_cofins' => 'float',
		'vl_bc_pis_susp' => 'float',
		'aliq_pis_susp' => 'float',
		'vl_pis_susp' => 'float',
		'vl_bc_cofins_susp' => 'float',
		'aliq_cofins_susp' => 'float',
		'vl_cofins_susp' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'cont_reg_ref',
		'chave_doc',
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
		'cst_pis_susp',
		'vl_bc_pis_susp',
		'aliq_pis_susp',
		'vl_pis_susp',
		'cst_cofins_susp',
		'vl_bc_cofins_susp',
		'aliq_cofins_susp',
		'vl_cofins_susp',
		'cod_cta',
		'cod_ccus',
		'desc_doc_oper'
	];
}
