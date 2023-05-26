<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC173
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $lote_med
 * @property float|null $qtd_item
 * @property Carbon|null $dt_fab
 * @property Carbon|null $dt_val
 * @property string|null $ind_med
 * @property string|null $tp_prod
 * @property float|null $vl_tab_max
 *
 * @package App\Models
 */
class RegC173 extends Model
{
	protected $table = 'reg_c173';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'qtd_item' => 'float',
		'dt_fab' => 'datetime',
		'dt_val' => 'datetime',
		'vl_tab_max' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'lote_med',
		'qtd_item',
		'dt_fab',
		'dt_val',
		'ind_med',
		'tp_prod',
		'vl_tab_max'
	];
}
