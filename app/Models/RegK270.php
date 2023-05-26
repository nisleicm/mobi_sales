<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegK270
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property Carbon|null $dt_ini_ap
 * @property Carbon|null $dt_fin_ap
 * @property string|null $cod_op_os
 * @property string|null $cod_item
 * @property float|null $qtd_cor_pos
 * @property float|null $qtd_cor_neg
 * @property string|null $origem
 *
 * @package App\Models
 */
class RegK270 extends Model
{
	protected $table = 'reg_k270';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_ini_ap' => 'datetime',
		'dt_fin_ap' => 'datetime',
		'qtd_cor_pos' => 'float',
		'qtd_cor_neg' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'dt_ini_ap',
		'dt_fin_ap',
		'cod_op_os',
		'cod_item',
		'qtd_cor_pos',
		'qtd_cor_neg',
		'origem'
	];
}
