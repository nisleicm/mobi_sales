<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContReg9900
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cont_reg_blc
 * @property string|null $qtd_cont_reg_blc
 *
 * @package App\Models
 */
class ContReg9900 extends Model
{
	protected $table = 'cont_reg_9900';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int'
	];

	protected $fillable = [
		'id',
		'id_pai',
		'linha',
		'cont_reg',
		'cont_reg_blc',
		'qtd_cont_reg_blc'
	];
}
