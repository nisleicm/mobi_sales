<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegD140
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_part_consg
 * @property string|null $cod_mun_orig
 * @property string|null $cod_mun_dest
 * @property string|null $ind_veic
 * @property string|null $veic_id
 * @property string|null $ind_nav
 * @property string|null $viagem
 * @property float|null $vl_frt_liq
 * @property float|null $vl_desp_port
 * @property float|null $vl_desp_car_desc
 * @property float|null $vl_out
 * @property float|null $vl_frt_brt
 * @property float|null $vl_frt_mm
 *
 * @package App\Models
 */
class RegD140 extends Model
{
	protected $table = 'reg_d140';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_frt_liq' => 'float',
		'vl_desp_port' => 'float',
		'vl_desp_car_desc' => 'float',
		'vl_out' => 'float',
		'vl_frt_brt' => 'float',
		'vl_frt_mm' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_part_consg',
		'cod_mun_orig',
		'cod_mun_dest',
		'ind_veic',
		'veic_id',
		'ind_nav',
		'viagem',
		'vl_frt_liq',
		'vl_desp_port',
		'vl_desp_car_desc',
		'vl_out',
		'vl_frt_brt',
		'vl_frt_mm'
	];
}
