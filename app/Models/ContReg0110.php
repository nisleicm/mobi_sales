<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContReg0110
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cod_inc_trib
 * @property string|null $ind_apro_cred
 * @property string|null $cod_tipo_cont
 * @property string|null $ind_cont_reg_cum
 *
 * @package App\Models
 */
class ContReg0110 extends Model
{
	protected $table = 'cont_reg_0110';
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
		'cod_inc_trib',
		'ind_apro_cred',
		'cod_tipo_cont',
		'ind_cont_reg_cum'
	];
}
