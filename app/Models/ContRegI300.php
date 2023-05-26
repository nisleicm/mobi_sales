<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegI300
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cod_comp
 * @property float|null $vl_comp
 * @property string|null $cod_cta
 * @property string|null $inf_comp
 *
 * @package App\Models
 */
class ContRegI300 extends Model
{
	protected $table = 'cont_reg_i300';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_comp' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'cod_comp',
		'vl_comp',
		'cod_cta',
		'inf_comp'
	];
}
