<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegD160
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $despacho
 * @property string|null $cnpj_cpf_rem
 * @property string|null $ie_rem
 * @property string|null $cod_mun_ori
 * @property string|null $cnpj_cpf_dest
 * @property string|null $ie_dest
 * @property string|null $cod_mun_dest
 *
 * @package App\Models
 */
class RegD160 extends Model
{
	protected $table = 'reg_d160';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'despacho',
		'cnpj_cpf_rem',
		'ie_rem',
		'cod_mun_ori',
		'cnpj_cpf_dest',
		'ie_dest',
		'cod_mun_dest'
	];
}
