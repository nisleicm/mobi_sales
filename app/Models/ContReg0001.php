<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContReg0001
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $ind_mov
 *
 * @package App\Models
 */
class ContReg0001 extends Model
{
	protected $table = 'cont_reg_0001';
	public $timestamps = false;

	protected $casts = [
		'id_pai' => 'int',
		'linha' => 'int'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'ind_mov'
	];
}
