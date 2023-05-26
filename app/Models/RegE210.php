<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegE210
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $ind_mov_st
 * @property float|null $vl_sld_cred_ant_st
 * @property float|null $vl_devol_st
 * @property float|null $vl_ressarc_st
 * @property float|null $vl_out_cred_st
 * @property float|null $vl_aj_creditos_st
 * @property float|null $vl_retencao_st
 * @property float|null $vl_out_deb_st
 * @property float|null $vl_aj_debitos_st
 * @property float|null $vl_sld_dev_ant_st
 * @property float|null $vl_deducoes_st
 * @property float|null $vl_icms_recol_st
 * @property float|null $vl_sld_cred_st_transportar
 * @property float|null $deb_esp_st
 *
 * @package App\Models
 */
class RegE210 extends Model
{
	protected $table = 'reg_e210';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_sld_cred_ant_st' => 'float',
		'vl_devol_st' => 'float',
		'vl_ressarc_st' => 'float',
		'vl_out_cred_st' => 'float',
		'vl_aj_creditos_st' => 'float',
		'vl_retencao_st' => 'float',
		'vl_out_deb_st' => 'float',
		'vl_aj_debitos_st' => 'float',
		'vl_sld_dev_ant_st' => 'float',
		'vl_deducoes_st' => 'float',
		'vl_icms_recol_st' => 'float',
		'vl_sld_cred_st_transportar' => 'float',
		'deb_esp_st' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'ind_mov_st',
		'vl_sld_cred_ant_st',
		'vl_devol_st',
		'vl_ressarc_st',
		'vl_out_cred_st',
		'vl_aj_creditos_st',
		'vl_retencao_st',
		'vl_out_deb_st',
		'vl_aj_debitos_st',
		'vl_sld_dev_ant_st',
		'vl_deducoes_st',
		'vl_icms_recol_st',
		'vl_sld_cred_st_transportar',
		'deb_esp_st'
	];
}
