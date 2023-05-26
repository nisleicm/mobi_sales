<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegD170
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_part_consg
 * @property string|null $cod_part_red
 * @property string|null $cod_mun_orig
 * @property string|null $cod_mun_dest
 * @property string|null $otm
 * @property string|null $ind_nat_frt
 * @property float|null $vl_liq_frt
 * @property float|null $vl_gris
 * @property float|null $vl_pdg
 * @property float|null $vl_out
 * @property float|null $vl_frt
 * @property string|null $veic_id
 * @property string|null $uf_id
 *
 * @package App\Models
 */
class RegD170 extends Model
{
	protected $table = 'reg_d170';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_liq_frt' => 'float',
		'vl_gris' => 'float',
		'vl_pdg' => 'float',
		'vl_out' => 'float',
		'vl_frt' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_part_consg',
		'cod_part_red',
		'cod_mun_orig',
		'cod_mun_dest',
		'otm',
		'ind_nat_frt',
		'vl_liq_frt',
		'vl_gris',
		'vl_pdg',
		'vl_out',
		'vl_frt',
		'veic_id',
		'uf_id'
	];
}
