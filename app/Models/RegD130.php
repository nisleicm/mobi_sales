<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegD130
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_part_consg
 * @property string|null $cod_part_red
 * @property string|null $ind_frt_red
 * @property string|null $cod_mun_orig
 * @property string|null $cod_mun_dest
 * @property string|null $veic_id
 * @property float|null $vl_liq_frt
 * @property float|null $vl_sec_cat
 * @property float|null $vl_desp
 * @property float|null $vl_pedg
 * @property float|null $vl_out
 * @property float|null $vl_frt
 * @property string|null $uf_id
 *
 * @package App\Models
 */
class RegD130 extends Model
{
	protected $table = 'reg_d130';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_liq_frt' => 'float',
		'vl_sec_cat' => 'float',
		'vl_desp' => 'float',
		'vl_pedg' => 'float',
		'vl_out' => 'float',
		'vl_frt' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_part_consg',
		'cod_part_red',
		'ind_frt_red',
		'cod_mun_orig',
		'cod_mun_dest',
		'veic_id',
		'vl_liq_frt',
		'vl_sec_cat',
		'vl_desp',
		'vl_pedg',
		'vl_out',
		'vl_frt',
		'uf_id'
	];
}
