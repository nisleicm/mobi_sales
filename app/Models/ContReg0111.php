<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContReg0111
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property float|null $rec_bru_ncum_trib_mi
 * @property float|null $rec_bru_ncum_nt_mi
 * @property float|null $rec_bru_ncum_exp
 * @property float|null $rec_bru_cum
 * @property float|null $rec_bru_total
 *
 * @package App\Models
 */
class ContReg0111 extends Model
{
	protected $table = 'cont_reg_0111';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'rec_bru_ncum_trib_mi' => 'float',
		'rec_bru_ncum_nt_mi' => 'float',
		'rec_bru_ncum_exp' => 'float',
		'rec_bru_cum' => 'float',
		'rec_bru_total' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'rec_bru_ncum_trib_mi',
		'rec_bru_ncum_nt_mi',
		'rec_bru_ncum_exp',
		'rec_bru_cum',
		'rec_bru_total'
	];
}
