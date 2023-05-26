<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegC601
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cst_pis
 * @property float|null $vl_item
 * @property float|null $vl_bc_pis
 * @property float|null $aliq_pis
 * @property float|null $vl_pis
 * @property string|null $cod_cta
 *
 * @package App\Models
 */
class ContRegC601 extends Model
{
	protected $table = 'cont_reg_c601';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_item' => 'float',
		'vl_bc_pis' => 'float',
		'aliq_pis' => 'float',
		'vl_pis' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'cst_pis',
		'vl_item',
		'vl_bc_pis',
		'aliq_pis',
		'vl_pis',
		'cod_cta'
	];
}
