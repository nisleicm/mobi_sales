<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegE110
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property float|null $vl_tot_debitos
 * @property float|null $vl_aj_debitos
 * @property float|null $vl_tot_aj_debitos
 * @property float|null $vl_estornos_cred
 * @property float|null $vl_tot_creditos
 * @property float|null $vl_aj_creditos
 * @property float|null $vl_tot_aj_creditos
 * @property float|null $vl_estornos_deb
 * @property float|null $vl_sld_credor_ant
 * @property float|null $vl_sld_apurado
 * @property float|null $vl_tot_ded
 * @property float|null $vl_icms_recolher
 * @property float|null $vl_sld_credor_transportar
 * @property float|null $deb_esp
 *
 * @package App\Models
 */
class RegE110 extends Model
{
	protected $table = 'reg_e110';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_tot_debitos' => 'float',
		'vl_aj_debitos' => 'float',
		'vl_tot_aj_debitos' => 'float',
		'vl_estornos_cred' => 'float',
		'vl_tot_creditos' => 'float',
		'vl_aj_creditos' => 'float',
		'vl_tot_aj_creditos' => 'float',
		'vl_estornos_deb' => 'float',
		'vl_sld_credor_ant' => 'float',
		'vl_sld_apurado' => 'float',
		'vl_tot_ded' => 'float',
		'vl_icms_recolher' => 'float',
		'vl_sld_credor_transportar' => 'float',
		'deb_esp' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'vl_tot_debitos',
		'vl_aj_debitos',
		'vl_tot_aj_debitos',
		'vl_estornos_cred',
		'vl_tot_creditos',
		'vl_aj_creditos',
		'vl_tot_aj_creditos',
		'vl_estornos_deb',
		'vl_sld_credor_ant',
		'vl_sld_apurado',
		'vl_tot_ded',
		'vl_icms_recolher',
		'vl_sld_credor_transportar',
		'deb_esp'
	];
}
