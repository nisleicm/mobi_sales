<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegE520
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property float|null $vl_sd_ant_ipi
 * @property float|null $vl_deb_ipi
 * @property float|null $vl_cred_ipi
 * @property float|null $vl_od_ipi
 * @property float|null $vl_oc_ipi
 * @property float|null $vl_sc_ipi
 * @property float|null $vl_sd_ipi
 *
 * @package App\Models
 */
class RegE520 extends Model
{
	protected $table = 'reg_e520';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_sd_ant_ipi' => 'float',
		'vl_deb_ipi' => 'float',
		'vl_cred_ipi' => 'float',
		'vl_od_ipi' => 'float',
		'vl_oc_ipi' => 'float',
		'vl_sc_ipi' => 'float',
		'vl_sd_ipi' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'vl_sd_ant_ipi',
		'vl_deb_ipi',
		'vl_cred_ipi',
		'vl_od_ipi',
		'vl_oc_ipi',
		'vl_sc_ipi',
		'vl_sd_ipi'
	];
}
