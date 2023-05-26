<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegF500
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property float|null $vl_rec_caixa
 * @property string|null $cst_pis
 * @property float|null $vl_desc_pis
 * @property float|null $vl_bc_pis
 * @property float|null $aliq_pis
 * @property float|null $vl_pis
 * @property string|null $cst_cofins
 * @property float|null $vl_desc_cofins
 * @property float|null $vl_bc_cofins
 * @property float|null $aliq_cofins
 * @property float|null $vl_cofins
 * @property string|null $cod_mod
 * @property string|null $cfop
 * @property string|null $cod_cta
 * @property string|null $info_compl
 *
 * @package App\Models
 */
class ContRegF500 extends Model
{
	protected $table = 'cont_reg_f500';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_rec_caixa' => 'float',
		'vl_desc_pis' => 'float',
		'vl_bc_pis' => 'float',
		'aliq_pis' => 'float',
		'vl_pis' => 'float',
		'vl_desc_cofins' => 'float',
		'vl_bc_cofins' => 'float',
		'aliq_cofins' => 'float',
		'vl_cofins' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'vl_rec_caixa',
		'cst_pis',
		'vl_desc_pis',
		'vl_bc_pis',
		'aliq_pis',
		'vl_pis',
		'cst_cofins',
		'vl_desc_cofins',
		'vl_bc_cofins',
		'aliq_cofins',
		'vl_cofins',
		'cod_mod',
		'cfop',
		'cod_cta',
		'info_compl'
	];
}
