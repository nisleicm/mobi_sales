<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegK280
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property Carbon|null $dt_est
 * @property string|null $cod_item
 * @property float|null $qtd_cor_pos
 * @property float|null $qtd_cor_neg
 * @property string|null $ind_est
 * @property string|null $cod_part
 *
 * @package App\Models
 */
class RegK280 extends Model
{
	protected $table = 'reg_k280';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_est' => 'datetime',
		'qtd_cor_pos' => 'float',
		'qtd_cor_neg' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'dt_est',
		'cod_item',
		'qtd_cor_pos',
		'qtd_cor_neg',
		'ind_est',
		'cod_part'
	];
}
