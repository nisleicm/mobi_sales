<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC115
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $ind_carga
 * @property string|null $cnpj_col
 * @property string|null $ie_col
 * @property string|null $cpf_col
 * @property string|null $cod_mun_col
 * @property string|null $cnpj_entg
 * @property string|null $ie_entg
 * @property string|null $cpf_entg
 * @property string|null $cod_mun_entg
 *
 * @package App\Models
 */
class RegC115 extends Model
{
	protected $table = 'reg_c115';
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
		'cnpj_col',
		'ie_col',
		'cpf_col',
		'cod_mun_col',
		'cnpj_entg',
		'ie_entg',
		'cpf_entg',
		'cod_mun_entg'
	];
}
