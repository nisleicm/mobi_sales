<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegE310
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $ind_mov_difal
 * @property float|null $vl_sld_cred_ant_difal
 * @property float|null $vl_tot_debitos_difal
 * @property float|null $vl_out_deb_difal
 * @property float|null $vl_tot_creditos_difal
 * @property float|null $vl_out_cred_difal
 * @property float|null $vl_sld_dev_ant_difal
 * @property float|null $vl_deducoes_difal
 * @property float|null $vl_recol
 * @property float|null $vl_sld_cred_transportar
 * @property float|null $deb_esp_difal
 * @property float|null $vl_sld_cred_ant_fcp
 * @property float|null $vl_tot_deb_fcp
 * @property float|null $vl_out_deb_fcp
 * @property float|null $vl_tot_cred_fcp
 * @property float|null $vl_out_cred_fcp
 * @property float|null $vl_sld_dev_ant_fcp
 * @property float|null $vl_deducoes_fcp
 * @property float|null $vl_recol_fcp
 * @property float|null $vl_sld_cred_transportar_fcp
 * @property float|null $deb_esp_fcp
 *
 * @package App\Models
 */
class RegE310 extends Model
{
	protected $table = 'reg_e310';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_sld_cred_ant_difal' => 'float',
		'vl_tot_debitos_difal' => 'float',
		'vl_out_deb_difal' => 'float',
		'vl_tot_creditos_difal' => 'float',
		'vl_out_cred_difal' => 'float',
		'vl_sld_dev_ant_difal' => 'float',
		'vl_deducoes_difal' => 'float',
		'vl_recol' => 'float',
		'vl_sld_cred_transportar' => 'float',
		'deb_esp_difal' => 'float',
		'vl_sld_cred_ant_fcp' => 'float',
		'vl_tot_deb_fcp' => 'float',
		'vl_out_deb_fcp' => 'float',
		'vl_tot_cred_fcp' => 'float',
		'vl_out_cred_fcp' => 'float',
		'vl_sld_dev_ant_fcp' => 'float',
		'vl_deducoes_fcp' => 'float',
		'vl_recol_fcp' => 'float',
		'vl_sld_cred_transportar_fcp' => 'float',
		'deb_esp_fcp' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'ind_mov_difal',
		'vl_sld_cred_ant_difal',
		'vl_tot_debitos_difal',
		'vl_out_deb_difal',
		'vl_tot_creditos_difal',
		'vl_out_cred_difal',
		'vl_sld_dev_ant_difal',
		'vl_deducoes_difal',
		'vl_recol',
		'vl_sld_cred_transportar',
		'deb_esp_difal',
		'vl_sld_cred_ant_fcp',
		'vl_tot_deb_fcp',
		'vl_out_deb_fcp',
		'vl_tot_cred_fcp',
		'vl_out_cred_fcp',
		'vl_sld_dev_ant_fcp',
		'vl_deducoes_fcp',
		'vl_recol_fcp',
		'vl_sld_cred_transportar_fcp',
		'deb_esp_fcp'
	];
}
