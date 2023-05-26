<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegG126
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property Carbon|null $dt_ini
 * @property Carbon|null $dt_fin
 * @property string|null $num_parc
 * @property float|null $vl_parc_pass
 * @property float|null $vl_trib_oc
 * @property float|null $vl_total
 * @property float|null $ind_per_sai
 * @property float|null $vl_parc_aprop
 *
 * @package App\Models
 */
class RegG126 extends Model
{
	protected $table = 'reg_g126';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_ini' => 'datetime',
		'dt_fin' => 'datetime',
		'vl_parc_pass' => 'float',
		'vl_trib_oc' => 'float',
		'vl_total' => 'float',
		'ind_per_sai' => 'float',
		'vl_parc_aprop' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'dt_ini',
		'dt_fin',
		'num_parc',
		'vl_parc_pass',
		'vl_trib_oc',
		'vl_total',
		'ind_per_sai',
		'vl_parc_aprop'
	];
}
