<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegD180
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $num_seq
 * @property string|null $ind_emit
 * @property string|null $cnpj_cpf_emit
 * @property string|null $uf_emit
 * @property string|null $ie_emit
 * @property string|null $cod_mun_orig
 * @property string|null $cnpj_cpf_tom
 * @property string|null $uf_tom
 * @property string|null $ie_tom
 * @property string|null $cod_mun_dest
 * @property string|null $cod_mod
 * @property string|null $ser
 * @property string|null $sub
 * @property string|null $num_doc
 * @property Carbon|null $dt_doc
 * @property float|null $vl_doc
 *
 * @package App\Models
 */
class RegD180 extends Model
{
	protected $table = 'reg_d180';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_doc' => 'datetime',
		'vl_doc' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'num_seq',
		'ind_emit',
		'cnpj_cpf_emit',
		'uf_emit',
		'ie_emit',
		'cod_mun_orig',
		'cnpj_cpf_tom',
		'uf_tom',
		'ie_tom',
		'cod_mun_dest',
		'cod_mod',
		'ser',
		'sub',
		'num_doc',
		'dt_doc',
		'vl_doc'
	];
}
