<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContReg1100
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $per_apu_cred
 * @property string|null $orig_cred
 * @property string|null $cnpj_suc
 * @property string|null $cod_cred
 * @property float|null $vl_cred_apu
 * @property float|null $vl_cred_ext_apu
 * @property float|null $vl_tot_cred_apu
 * @property float|null $vl_cred_desc_pa_ant
 * @property float|null $vl_cred_per_pa_ant
 * @property float|null $vl_cred_dcomp_pa_ant
 * @property float|null $sd_cred_disp_efd
 * @property float|null $vl_cred_desc_efd
 * @property float|null $vl_cred_per_efd
 * @property float|null $vl_cred_dcomp_efd
 * @property float|null $vl_cred_trans
 * @property float|null $vl_cred_out
 * @property float|null $sld_cred_fim
 *
 * @package App\Models
 */
class ContReg1100 extends Model
{
	protected $table = 'cont_reg_1100';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_cred_apu' => 'float',
		'vl_cred_ext_apu' => 'float',
		'vl_tot_cred_apu' => 'float',
		'vl_cred_desc_pa_ant' => 'float',
		'vl_cred_per_pa_ant' => 'float',
		'vl_cred_dcomp_pa_ant' => 'float',
		'sd_cred_disp_efd' => 'float',
		'vl_cred_desc_efd' => 'float',
		'vl_cred_per_efd' => 'float',
		'vl_cred_dcomp_efd' => 'float',
		'vl_cred_trans' => 'float',
		'vl_cred_out' => 'float',
		'sld_cred_fim' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'per_apu_cred',
		'orig_cred',
		'cnpj_suc',
		'cod_cred',
		'vl_cred_apu',
		'vl_cred_ext_apu',
		'vl_tot_cred_apu',
		'vl_cred_desc_pa_ant',
		'vl_cred_per_pa_ant',
		'vl_cred_dcomp_pa_ant',
		'sd_cred_disp_efd',
		'vl_cred_desc_efd',
		'vl_cred_per_efd',
		'vl_cred_dcomp_efd',
		'vl_cred_trans',
		'vl_cred_out',
		'sld_cred_fim'
	];
}
