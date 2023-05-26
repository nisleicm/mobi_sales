<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg1105
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_mod
 * @property string|null $ser
 * @property string|null $num_doc
 * @property string|null $chv_nfe
 * @property Carbon|null $dt_doc
 * @property string|null $cod_item
 *
 * @package App\Models
 */
class Reg1105 extends Model
{
	protected $table = 'reg_1105';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_doc' => 'datetime'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_mod',
		'ser',
		'num_doc',
		'chv_nfe',
		'dt_doc',
		'cod_item'
	];
}
