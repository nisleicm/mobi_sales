<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegD209
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $num_proc
 * @property string|null $ind_proc
 *
 * @package App\Models
 */
class ContRegD209 extends Model
{
	protected $table = 'cont_reg_d209';
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
		'num_proc',
		'ind_proc'
	];
}
