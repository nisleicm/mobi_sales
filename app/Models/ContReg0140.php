<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContReg0140
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cod_est
 * @property string|null $nome
 * @property string|null $cnpj
 * @property string|null $uf
 * @property string|null $ie
 * @property string|null $cod_mun
 * @property string|null $im
 * @property string|null $suframa
 *
 * @package App\Models
 */
class ContReg0140 extends Model
{
	protected $table = 'cont_reg_0140';
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
		'cont_reg',
		'cod_est',
		'nome',
		'cnpj',
		'uf',
		'ie',
		'cod_mun',
		'im',
		'suframa'
	];
}
