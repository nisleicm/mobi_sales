<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegK260
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_op_os
 * @property string|null $cod_item
 * @property Carbon|null $dt_saida
 * @property float|null $qtd_saida
 * @property Carbon|null $dt_ret
 * @property float|null $qtd_ret
 *
 * @package App\Models
 */
class RegK260 extends Model
{
	protected $table = 'reg_k260';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_saida' => 'datetime',
		'qtd_saida' => 'float',
		'dt_ret' => 'datetime',
		'qtd_ret' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_op_os',
		'cod_item',
		'dt_saida',
		'qtd_saida',
		'dt_ret',
		'qtd_ret'
	];
}
