<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegP110
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $num_campo
 * @property string|null $cod_det
 * @property float|null $det_valor
 * @property string|null $inf_compl
 *
 * @package App\Models
 */
class ContRegP110 extends Model
{
	protected $table = 'cont_reg_p110';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'det_valor' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'num_campo',
		'cod_det',
		'det_valor',
		'inf_compl'
	];
}
