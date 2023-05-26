<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegG125
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_ind_bem
 * @property Carbon|null $dt_mov
 * @property string|null $tipo_mov
 * @property float|null $vl_imob_icms_op
 * @property float|null $vl_imob_icms_st
 * @property float|null $vl_imob_icms_frt
 * @property float|null $vl_imob_icms_dif
 * @property string|null $num_parc
 * @property float|null $vl_parc_pass
 *
 * @package App\Models
 */
class RegG125 extends Model
{
	protected $table = 'reg_g125';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_mov' => 'datetime',
		'vl_imob_icms_op' => 'float',
		'vl_imob_icms_st' => 'float',
		'vl_imob_icms_frt' => 'float',
		'vl_imob_icms_dif' => 'float',
		'vl_parc_pass' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_ind_bem',
		'dt_mov',
		'tipo_mov',
		'vl_imob_icms_op',
		'vl_imob_icms_st',
		'vl_imob_icms_frt',
		'vl_imob_icms_dif',
		'num_parc',
		'vl_parc_pass'
	];
}
