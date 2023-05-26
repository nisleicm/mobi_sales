<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegC860
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cod_mod
 * @property string|null $nr_sat
 * @property Carbon|null $dt_doc
 * @property string|null $doc_ini
 * @property string|null $doc_fim
 *
 * @package App\Models
 */
class ContRegC860 extends Model
{
	protected $table = 'cont_reg_c860';
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
		'cont_reg',
		'cod_mod',
		'nr_sat',
		'dt_doc',
		'doc_ini',
		'doc_fim'
	];
}
