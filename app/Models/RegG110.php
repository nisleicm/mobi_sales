<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegG110
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property Carbon|null $dt_ini
 * @property Carbon|null $dt_fin
 * @property float|null $saldo_in_icms
 * @property float|null $som_parc
 * @property float|null $vl_trib_exp
 * @property float|null $vl_total
 * @property float|null $ind_per_sai
 * @property float|null $icms_aprop
 * @property float|null $som_icms_oc
 *
 * @package App\Models
 */
class RegG110 extends Model
{
	protected $table = 'reg_g110';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_ini' => 'datetime',
		'dt_fin' => 'datetime',
		'saldo_in_icms' => 'float',
		'som_parc' => 'float',
		'vl_trib_exp' => 'float',
		'vl_total' => 'float',
		'ind_per_sai' => 'float',
		'icms_aprop' => 'float',
		'som_icms_oc' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'dt_ini',
		'dt_fin',
		'saldo_in_icms',
		'som_parc',
		'vl_trib_exp',
		'vl_total',
		'ind_per_sai',
		'icms_aprop',
		'som_icms_oc'
	];
}
