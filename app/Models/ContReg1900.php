<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContReg1900
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cnpj
 * @property string|null $cod_mod
 * @property string|null $ser
 * @property string|null $sub_ser
 * @property string|null $cod_sit
 * @property float|null $vl_tot_rec
 * @property string|null $quant_doc
 * @property string|null $cst_pis
 * @property string|null $cst_cofins
 * @property string|null $cfop
 * @property string|null $info_compl
 * @property string|null $cod_cta
 *
 * @package App\Models
 */
class ContReg1900 extends Model
{
	protected $table = 'cont_reg_1900';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_tot_rec' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'cnpj',
		'cod_mod',
		'ser',
		'sub_ser',
		'cod_sit',
		'vl_tot_rec',
		'quant_doc',
		'cst_pis',
		'cst_cofins',
		'cfop',
		'info_compl',
		'cod_cta'
	];
}
