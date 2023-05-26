<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegK255
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property Carbon|null $dt_cons
 * @property string|null $cod_item
 * @property float|null $qtd
 * @property string|null $cod_ins_subst
 *
 * @package App\Models
 */
class RegK255 extends Model
{
	protected $table = 'reg_k255';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_cons' => 'datetime',
		'qtd' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'dt_cons',
		'cod_item',
		'qtd',
		'cod_ins_subst'
	];
}
