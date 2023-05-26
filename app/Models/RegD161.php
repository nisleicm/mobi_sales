<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegD161
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $ind_carga
 * @property string|null $cnpj_cpf_col
 * @property string|null $ie_col
 * @property string|null $cod_mun_col
 * @property string|null $cnpj_cpf_entg
 * @property string|null $ie_entg
 * @property string|null $cod_mun_entg
 *
 * @package App\Models
 */
class RegD161 extends Model
{
	protected $table = 'reg_d161';
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
		'ind_carga',
		'cnpj_cpf_col',
		'ie_col',
		'cod_mun_col',
		'cnpj_cpf_entg',
		'ie_entg',
		'cod_mun_entg'
	];
}
