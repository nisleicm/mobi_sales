<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegK200
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property Carbon|null $dt_est
 * @property string|null $cod_item
 * @property float|null $qtd
 * @property string|null $ind_est
 * @property string|null $cod_part
 *
 * @package App\Models
 */
class RegK200 extends Model
{
	protected $table = 'reg_k200';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_est' => 'datetime',
		'qtd' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'dt_est',
		'cod_item',
		'qtd',
		'ind_est',
		'cod_part'
	];
}
