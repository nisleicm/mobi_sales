<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegI200
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $num_campo
 * @property string|null $cod_det
 * @property float|null $vl_det
 * @property string|null $cod_cta
 * @property string|null $inf_comp
 *
 * @package App\Models
 */
class ContRegI200 extends Model
{
	protected $table = 'cont_reg_i200';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_det' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'num_campo',
		'cod_det',
		'vl_det',
		'cod_cta',
		'inf_comp'
	];
}
