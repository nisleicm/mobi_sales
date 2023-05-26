<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegK220
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property Carbon|null $dt_mov
 * @property string|null $cod_item_ori
 * @property string|null $cod_item_dest
 * @property float|null $qtd_ori
 * @property float|null $qtd_dest
 *
 * @package App\Models
 */
class RegK220 extends Model
{
	protected $table = 'reg_k220';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_mov' => 'datetime',
		'qtd_ori' => 'float',
		'qtd_dest' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'dt_mov',
		'cod_item_ori',
		'cod_item_dest',
		'qtd_ori',
		'qtd_dest'
	];
}
