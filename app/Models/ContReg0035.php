<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContReg0035
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cod_scp
 * @property string|null $nome_scp
 * @property string|null $inf_comp
 *
 * @package App\Models
 */
class ContReg0035 extends Model
{
	protected $table = 'cont_reg_0035';
	public $timestamps = false;

	protected $casts = [
		'id_pai' => 'int',
		'linha' => 'int'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'cod_scp',
		'nome_scp',
		'inf_comp'
	];
}
