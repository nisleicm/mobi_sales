<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContReg1010
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $num_proc
 * @property string|null $id_sec_jud
 * @property string|null $id_vara
 * @property string|null $ind_nat_acao
 * @property string|null $desc_dec_jud
 * @property Carbon|null $dt_sent_jud
 *
 * @package App\Models
 */
class ContReg1010 extends Model
{
	protected $table = 'cont_reg_1010';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_sent_jud' => 'datetime'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'num_proc',
		'id_sec_jud',
		'id_vara',
		'ind_nat_acao',
		'desc_dec_jud',
		'dt_sent_jud'
	];
}
