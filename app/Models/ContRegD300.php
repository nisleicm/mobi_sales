<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegD300
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cod_mod
 * @property string|null $ser
 * @property string|null $sub
 * @property string|null $num_doc_ini
 * @property string|null $num_doc_fin
 * @property string|null $cfop
 * @property Carbon|null $dt_ref
 * @property float|null $vl_doc
 * @property float|null $vl_desc
 * @property string|null $cst_pis
 * @property float|null $vl_bc_pis
 * @property float|null $aliq_pis
 * @property float|null $vl_pis
 * @property string|null $cst_cofins
 * @property float|null $vl_bc_cofins
 * @property float|null $aliq_cofins
 * @property float|null $vl_cofins
 * @property string|null $cod_cta
 *
 * @package App\Models
 */
class ContRegD300 extends Model
{
	protected $table = 'cont_reg_d300';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_ref' => 'datetime',
		'vl_doc' => 'float',
		'vl_desc' => 'float',
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
		'cod_mod',
		'ser',
		'sub',
		'num_doc_ini',
		'num_doc_fin',
		'cfop',
		'dt_ref',
		'vl_doc',
		'vl_desc',
		'cst_pis',
		'vl_bc_pis',
		'aliq_pis',
		'vl_pis',
		'cst_cofins',
		'vl_bc_cofins',
		'aliq_cofins',
		'vl_cofins',
		'cod_cta'
	];
}
