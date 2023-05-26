<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContReg1800
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $inc_imob
 * @property float|null $rec_receb_ret
 * @property float|null $rec_fin_ret
 * @property float|null $bc_ret
 * @property float|null $aliq_ret
 * @property float|null $vl_rec_uni
 * @property Carbon|null $dt_rec_uni
 * @property string|null $cod_rec
 *
 * @package App\Models
 */
class ContReg1800 extends Model
{
	protected $table = 'cont_reg_1800';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'rec_receb_ret' => 'float',
		'rec_fin_ret' => 'float',
		'bc_ret' => 'float',
		'aliq_ret' => 'float',
		'vl_rec_uni' => 'float',
		'dt_rec_uni' => 'datetime'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'inc_imob',
		'rec_receb_ret',
		'rec_fin_ret',
		'bc_ret',
		'aliq_ret',
		'vl_rec_uni',
		'dt_rec_uni',
		'cod_rec'
	];
}
