<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegF525
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property float|null $vl_rec
 * @property string|null $ind_rec
 * @property string|null $cnpj_cpf
 * @property string|null $num_doc
 * @property string|null $cod_item
 * @property float|null $vl_rec_det
 * @property string|null $cst_pis
 * @property string|null $cst_cofins
 * @property string|null $info_compl
 * @property string|null $cod_cta
 *
 * @package App\Models
 */
class ContRegF525 extends Model
{
	protected $table = 'cont_reg_f525';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_rec' => 'float',
		'vl_rec_det' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'vl_rec',
		'ind_rec',
		'cnpj_cpf',
		'num_doc',
		'cod_item',
		'vl_rec_det',
		'cst_pis',
		'cst_cofins',
		'info_compl',
		'cod_cta'
	];
}
