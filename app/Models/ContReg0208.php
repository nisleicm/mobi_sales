<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContReg0208
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cod_tab
 * @property string|null $cod_gru
 * @property string|null $marca_com
 *
 * @package App\Models
 */
class ContReg0208 extends Model
{
	protected $table = 'cont_reg_0208';
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
		'cod_tab',
		'cod_gru',
		'marca_com'
	];
}
