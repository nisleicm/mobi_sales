<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegB030
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_mod
 * @property string|null $ser
 * @property string|null $num_doc_ini
 * @property string|null $num_doc_fin
 * @property Carbon|null $dt_doc
 * @property string|null $qtd_canc
 * @property float|null $vl_cont
 * @property float|null $vl_isnt_iss
 * @property float|null $vl_bc_iss
 * @property float|null $vl_iss
 * @property string|null $cod_inf_obs
 *
 * @package App\Models
 */
class RegB030 extends Model
{
	protected $table = 'reg_b030';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_doc' => 'datetime',
		'vl_cont' => 'float',
		'vl_isnt_iss' => 'float',
		'vl_bc_iss' => 'float',
		'vl_iss' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_mod',
		'ser',
		'num_doc_ini',
		'num_doc_fin',
		'dt_doc',
		'qtd_canc',
		'vl_cont',
		'vl_isnt_iss',
		'vl_bc_iss',
		'vl_iss',
		'cod_inf_obs'
	];
}
