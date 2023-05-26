<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegM200
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property float|null $vl_tot_cont_nc_per
 * @property float|null $vl_tot_cred_desc
 * @property float|null $vl_tot_cred_desc_ant
 * @property float|null $vl_tot_cont_nc_dev
 * @property float|null $vl_ret_nc
 * @property float|null $vl_out_ded_nc
 * @property float|null $vl_cont_nc_rec
 * @property float|null $vl_tot_cont_cum_per
 * @property float|null $vl_ret_cum
 * @property float|null $vl_out_ded_cum
 * @property float|null $vl_cont_cum_rec
 * @property float|null $vl_tot_cont_rec
 *
 * @package App\Models
 */
class ContRegM200 extends Model
{
	protected $table = 'cont_reg_m200';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_tot_cont_nc_per' => 'float',
		'vl_tot_cred_desc' => 'float',
		'vl_tot_cred_desc_ant' => 'float',
		'vl_tot_cont_nc_dev' => 'float',
		'vl_ret_nc' => 'float',
		'vl_out_ded_nc' => 'float',
		'vl_cont_nc_rec' => 'float',
		'vl_tot_cont_cum_per' => 'float',
		'vl_ret_cum' => 'float',
		'vl_out_ded_cum' => 'float',
		'vl_cont_cum_rec' => 'float',
		'vl_tot_cont_rec' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'vl_tot_cont_nc_per',
		'vl_tot_cred_desc',
		'vl_tot_cred_desc_ant',
		'vl_tot_cont_nc_dev',
		'vl_ret_nc',
		'vl_out_ded_nc',
		'vl_cont_nc_rec',
		'vl_tot_cont_cum_per',
		'vl_ret_cum',
		'vl_out_ded_cum',
		'vl_cont_cum_rec',
		'vl_tot_cont_rec'
	];
}
