<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg1110
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_part
 * @property string|null $cod_mod
 * @property string|null $ser
 * @property string|null $num_doc
 * @property Carbon|null $dt_doc
 * @property string|null $chv_nfe
 * @property string|null $nr_memo
 * @property float|null $qtd
 * @property string|null $unid
 * @property string|null $cod_sit
 *
 * @package App\Models
 */
class Reg1110 extends Model
{
	protected $table = 'reg_1110';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_doc' => 'datetime',
		'qtd' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_part',
		'cod_mod',
		'ser',
		'num_doc',
		'dt_doc',
		'chv_nfe',
		'nr_memo',
		'qtd',
		'unid',
		'cod_sit'
	];
}
