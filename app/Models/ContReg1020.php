<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContReg1020
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $num_proc
 * @property string|null $ind_nat_acao
 * @property Carbon|null $dt_dec_adm
 *
 * @package App\Models
 */
class ContReg1020 extends Model
{
	protected $table = 'cont_reg_1020';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_dec_adm' => 'datetime'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'num_proc',
		'ind_nat_acao',
		'dt_dec_adm'
	];
}
