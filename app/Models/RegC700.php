<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC700
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_mod
 * @property string|null $ser
 * @property string|null $nro_ord_ini
 * @property string|null $nro_ord_fin
 * @property Carbon|null $dt_doc_ini
 * @property Carbon|null $dt_doc_fin
 * @property string|null $nom_mest
 * @property string|null $chv_cod_dig
 *
 * @package App\Models
 */
class RegC700 extends Model
{
	protected $table = 'reg_c700';
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
		'reg',
		'cod_mod',
		'ser',
		'nro_ord_ini',
		'nro_ord_fin',
		'dt_doc_ini',
		'dt_doc_fin',
		'nom_mest',
		'chv_cod_dig'
	];
}
