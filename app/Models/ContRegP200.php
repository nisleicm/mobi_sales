<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegP200
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $per_ref
 * @property float|null $vl_tot_cont_apu
 * @property float|null $vl_tot_aj_reduc
 * @property float|null $vl_tot_aj_acres
 * @property float|null $vl_tot_cont_dev
 * @property string|null $cod_rec
 *
 * @package App\Models
 */
class ContRegP200 extends Model
{
	protected $table = 'cont_reg_p200';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_tot_cont_apu' => 'float',
		'vl_tot_aj_reduc' => 'float',
		'vl_tot_aj_acres' => 'float',
		'vl_tot_cont_dev' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'per_ref',
		'vl_tot_cont_apu',
		'vl_tot_aj_reduc',
		'vl_tot_aj_acres',
		'vl_tot_cont_dev',
		'cod_rec'
	];
}
