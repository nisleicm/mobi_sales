<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg1920
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property float|null $vl_tot_transf_debitos_oa
 * @property float|null $vl_tot_aj_debitos_oa
 * @property float|null $vl_estornos_cred_oa
 * @property float|null $vl_tot_transf_creditos_oa
 * @property float|null $vl_tot_aj_creditos_oa
 * @property float|null $vl_estornos_deb_oa
 * @property float|null $vl_sld_credor_ant_oa
 * @property float|null $vl_sld_apurado_oa
 * @property float|null $vl_tot_ded
 * @property float|null $vl_icms_recolher_oa
 * @property float|null $vl_sld_credor_transp_oa
 * @property float|null $deb_esp_oa
 *
 * @package App\Models
 */
class Reg1920 extends Model
{
	protected $table = 'reg_1920';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_tot_transf_debitos_oa' => 'float',
		'vl_tot_aj_debitos_oa' => 'float',
		'vl_estornos_cred_oa' => 'float',
		'vl_tot_transf_creditos_oa' => 'float',
		'vl_tot_aj_creditos_oa' => 'float',
		'vl_estornos_deb_oa' => 'float',
		'vl_sld_credor_ant_oa' => 'float',
		'vl_sld_apurado_oa' => 'float',
		'vl_tot_ded' => 'float',
		'vl_icms_recolher_oa' => 'float',
		'vl_sld_credor_transp_oa' => 'float',
		'deb_esp_oa' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'vl_tot_transf_debitos_oa',
		'vl_tot_aj_debitos_oa',
		'vl_estornos_cred_oa',
		'vl_tot_transf_creditos_oa',
		'vl_tot_aj_creditos_oa',
		'vl_estornos_deb_oa',
		'vl_sld_credor_ant_oa',
		'vl_sld_apurado_oa',
		'vl_tot_ded',
		'vl_icms_recolher_oa',
		'vl_sld_credor_transp_oa',
		'deb_esp_oa'
	];
}
