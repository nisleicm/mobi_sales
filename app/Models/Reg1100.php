<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg1100
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $ind_doc
 * @property string|null $nro_de
 * @property Carbon|null $dt_de
 * @property string|null $nat_exp
 * @property string|null $nro_re
 * @property Carbon|null $dt_re
 * @property string|null $chc_emb
 * @property Carbon|null $dt_chc
 * @property Carbon|null $dt_avb
 * @property string|null $tp_chc
 * @property string|null $pais
 *
 * @package App\Models
 */
class Reg1100 extends Model
{
	protected $table = 'reg_1100';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_de' => 'datetime',
		'dt_re' => 'datetime',
		'dt_chc' => 'datetime',
		'dt_avb' => 'datetime'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'ind_doc',
		'nro_de',
		'dt_de',
		'nat_exp',
		'nro_re',
		'dt_re',
		'chc_emb',
		'dt_chc',
		'dt_avb',
		'tp_chc',
		'pais'
	];
}
