<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegE113
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_part
 * @property string|null $cod_mod
 * @property string|null $ser
 * @property string|null $sub
 * @property string|null $num_doc
 * @property Carbon|null $dt_doc
 * @property string|null $cod_item
 * @property float|null $vl_aj_item
 * @property string|null $chv_doce
 *
 * @package App\Models
 */
class RegE113 extends Model
{
	protected $table = 'reg_e113';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_doc' => 'datetime',
		'vl_aj_item' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_part',
		'cod_mod',
		'ser',
		'sub',
		'num_doc',
		'dt_doc',
		'cod_item',
		'vl_aj_item',
		'chv_doce'
	];
}
