<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegC190
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cod_mod
 * @property Carbon|null $dt_ref_ini
 * @property Carbon|null $dt_ref_fin
 * @property string|null $cod_item
 * @property string|null $cod_ncm
 * @property string|null $ex_ipi
 * @property float|null $vl_tot_item
 *
 * @package App\Models
 */
class ContRegC190 extends Model
{
	protected $table = 'cont_reg_c190';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_ref_ini' => 'datetime',
		'dt_ref_fin' => 'datetime',
		'vl_tot_item' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'cod_mod',
		'dt_ref_ini',
		'dt_ref_fin',
		'cod_item',
		'cod_ncm',
		'ex_ipi',
		'vl_tot_item'
	];
}
