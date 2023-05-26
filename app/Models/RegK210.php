<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegK210
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property Carbon|null $dt_ini_os
 * @property Carbon|null $dt_fin_os
 * @property string|null $cod_doc_os
 * @property string|null $cod_item_ori
 * @property float|null $qtd_ori
 *
 * @package App\Models
 */
class RegK210 extends Model
{
	protected $table = 'reg_k210';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_ini_os' => 'datetime',
		'dt_fin_os' => 'datetime',
		'qtd_ori' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'dt_ini_os',
		'dt_fin_os',
		'cod_doc_os',
		'cod_item_ori',
		'qtd_ori'
	];
}
