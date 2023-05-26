<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegC170
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $num_item
 * @property string|null $cod_item
 * @property string|null $descr_compl
 * @property float|null $qtd
 * @property string|null $unid
 * @property float|null $vl_item
 * @property float|null $vl_desc
 * @property string|null $ind_mov
 * @property string|null $cst_icms
 * @property string|null $cfop
 * @property string|null $cod_nat
 * @property float|null $vl_bc_icms
 * @property float|null $aliq_icms
 * @property float|null $vl_icms
 * @property float|null $vl_bc_icms_st
 * @property float|null $aliq_st
 * @property float|null $vl_icms_st
 * @property string|null $ind_apur
 * @property string|null $cst_ipi
 * @property string|null $cod_enq
 * @property float|null $vl_bc_ipi
 * @property float|null $aliq_ipi
 * @property float|null $vl_ipi
 * @property string|null $cst_pis
 * @property float|null $vl_bc_pis
 * @property float|null $aliq_pis
 * @property float|null $quant_bc_pis
 * @property float|null $aliq_pis_quant
 * @property float|null $vl_pis
 * @property string|null $cst_cofins
 * @property float|null $vl_bc_cofins
 * @property float|null $aliq_cofins
 * @property float|null $quant_bc_cofins
 * @property float|null $aliq_cofins_quant
 * @property float|null $vl_cofins
 * @property string|null $cod_cta
 *
 * @package App\Models
 */
class ContRegC170 extends Model
{
	protected $table = 'cont_reg_c170';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'qtd' => 'float',
		'vl_item' => 'float',
		'vl_desc' => 'float',
		'vl_bc_icms' => 'float',
		'aliq_icms' => 'float',
		'vl_icms' => 'float',
		'vl_bc_icms_st' => 'float',
		'aliq_st' => 'float',
		'vl_icms_st' => 'float',
		'vl_bc_ipi' => 'float',
		'aliq_ipi' => 'float',
		'vl_ipi' => 'float',
		'vl_bc_pis' => 'float',
		'aliq_pis' => 'float',
		'quant_bc_pis' => 'float',
		'aliq_pis_quant' => 'float',
		'vl_pis' => 'float',
		'vl_bc_cofins' => 'float',
		'aliq_cofins' => 'float',
		'quant_bc_cofins' => 'float',
		'aliq_cofins_quant' => 'float',
		'vl_cofins' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'num_item',
		'cod_item',
		'descr_compl',
		'qtd',
		'unid',
		'vl_item',
		'vl_desc',
		'ind_mov',
		'cst_icms',
		'cfop',
		'cod_nat',
		'vl_bc_icms',
		'aliq_icms',
		'vl_icms',
		'vl_bc_icms_st',
		'aliq_st',
		'vl_icms_st',
		'ind_apur',
		'cst_ipi',
		'cod_enq',
		'vl_bc_ipi',
		'aliq_ipi',
		'vl_ipi',
		'cst_pis',
		'vl_bc_pis',
		'aliq_pis',
		'quant_bc_pis',
		'aliq_pis_quant',
		'vl_pis',
		'cst_cofins',
		'vl_bc_cofins',
		'aliq_cofins',
		'quant_bc_cofins',
		'aliq_cofins_quant',
		'vl_cofins',
		'cod_cta'
	];
}
