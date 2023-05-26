<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegC490
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property Carbon|null $dt_doc_ini
 * @property Carbon|null $dt_doc_fin
 * @property string|null $cod_mod
 *
 * @package App\Models
 */
class ContRegC490 extends Model
{
	protected $table = 'cont_reg_c490';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_doc_ini' => 'datetime',
		'dt_doc_fin' => 'datetime'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'dt_doc_ini',
		'dt_doc_fin',
		'cod_mod'
	];
}
