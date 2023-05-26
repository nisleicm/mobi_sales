<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegC400
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cod_mod
 * @property string|null $ecf_mod
 * @property string|null $ecf_fab
 * @property string|null $ecf_cx
 *
 * @package App\Models
 */
class ContRegC400 extends Model
{
	protected $table = 'cont_reg_c400';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'cod_mod',
		'ecf_mod',
		'ecf_fab',
		'ecf_cx'
	];
}
