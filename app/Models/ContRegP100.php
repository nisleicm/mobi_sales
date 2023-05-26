<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegP100
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property Carbon|null $dt_ini
 * @property Carbon|null $dt_fim
 * @property float|null $vl_rec_tot_est
 * @property string|null $cod_ativ_econ
 * @property float|null $vl_rec_ativ_estab
 * @property float|null $vl_exc
 * @property float|null $vl_bc_cont
 * @property float|null $aliq_cont
 * @property float|null $vl_cont_apu
 * @property string|null $cod_cta
 * @property string|null $info_compl
 *
 * @package App\Models
 */
class ContRegP100 extends Model
{
	protected $table = 'cont_reg_p100';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_ini' => 'datetime',
		'dt_fim' => 'datetime',
		'vl_rec_tot_est' => 'float',
		'vl_rec_ativ_estab' => 'float',
		'vl_exc' => 'float',
		'vl_bc_cont' => 'float',
		'aliq_cont' => 'float',
		'vl_cont_apu' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'dt_ini',
		'dt_fim',
		'vl_rec_tot_est',
		'cod_ativ_econ',
		'vl_rec_ativ_estab',
		'vl_exc',
		'vl_bc_cont',
		'aliq_cont',
		'vl_cont_apu',
		'cod_cta',
		'info_compl'
	];
}
