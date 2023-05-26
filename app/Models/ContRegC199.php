<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegC199
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cod_doc_imp
 * @property string|null $num_doc_imp
 * @property float|null $vl_pis_imp
 * @property float|null $vl_cofins_imp
 * @property string|null $num_acdraw
 *
 * @package App\Models
 */
class ContRegC199 extends Model
{
	protected $table = 'cont_reg_c199';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_pis_imp' => 'float',
		'vl_cofins_imp' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'cod_doc_imp',
		'num_doc_imp',
		'vl_pis_imp',
		'vl_cofins_imp',
		'num_acdraw'
	];
}
