<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegC191
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cnpj_cpf_part
 * @property string|null $cst_pis
 * @property string|null $cfop
 * @property float|null $vl_item
 * @property float|null $vl_desc
 * @property float|null $vl_bc_pis
 * @property float|null $aliq_pis
 * @property float|null $quant_bc_pis
 * @property float|null $aliq_pis_quant
 * @property float|null $vl_pis
 * @property string|null $cod_cta
 *
 * @package App\Models
 */
class ContRegC191 extends Model
{
	protected $table = 'cont_reg_c191';
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
		'quant_bc_pis' => 'float',
		'aliq_pis_quant' => 'float',
		'vl_pis' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'cnpj_cpf_part',
		'cst_pis',
		'cfop',
		'vl_item',
		'vl_desc',
		'vl_bc_pis',
		'aliq_pis',
		'quant_bc_pis',
		'aliq_pis_quant',
		'vl_pis',
		'cod_cta'
	];
}
