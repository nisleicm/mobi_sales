<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegE116
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_or
 * @property float|null $vl_or
 * @property Carbon|null $dt_vcto
 * @property string|null $cod_rec
 * @property string|null $num_proc
 * @property string|null $ind_proc
 * @property string|null $proc
 * @property string|null $txt_compl
 * @property string|null $mes_ref
 *
 * @package App\Models
 */
class RegE116 extends Model
{
	protected $table = 'reg_e116';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_or' => 'float',
		'dt_vcto' => 'datetime'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_or',
		'vl_or',
		'dt_vcto',
		'cod_rec',
		'num_proc',
		'ind_proc',
		'proc',
		'txt_compl',
		'mes_ref'
	];
}
