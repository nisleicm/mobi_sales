<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContReg0145
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cod_inc_trib
 * @property float|null $vl_rec_tot
 * @property float|null $vl_rec_ativ
 * @property float|null $vl_rec_demais_ativ
 * @property string|null $info_compl
 *
 * @package App\Models
 */
class ContReg0145 extends Model
{
	protected $table = 'cont_reg_0145';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_rec_tot' => 'float',
		'vl_rec_ativ' => 'float',
		'vl_rec_demais_ativ' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'cod_inc_trib',
		'vl_rec_tot',
		'vl_rec_ativ',
		'vl_rec_demais_ativ',
		'info_compl'
	];
}
