<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegK230
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property Carbon|null $dt_ini_op
 * @property Carbon|null $dt_fin_op
 * @property string|null $cod_doc_op
 * @property string|null $cod_item
 * @property float|null $qtd_enc
 *
 * @package App\Models
 */
class RegK230 extends Model
{
	protected $table = 'reg_k230';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_ini_op' => 'datetime',
		'dt_fin_op' => 'datetime',
		'qtd_enc' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'dt_ini_op',
		'dt_fin_op',
		'cod_doc_op',
		'cod_item',
		'qtd_enc'
	];
}
