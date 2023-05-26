<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContReg0150
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cod_part
 * @property string|null $nome
 * @property string|null $cod_pais
 * @property string|null $cnpj
 * @property string|null $cpf
 * @property string|null $ie
 * @property string|null $cod_mun
 * @property string|null $suframa
 * @property string|null $end
 * @property string|null $num
 * @property string|null $compl
 * @property string|null $bairro
 *
 * @package App\Models
 */
class ContReg0150 extends Model
{
	protected $table = 'cont_reg_0150';
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
		'cod_part',
		'nome',
		'cod_pais',
		'cnpj',
		'cpf',
		'ie',
		'cod_mun',
		'suframa',
		'end',
		'num',
		'compl',
		'bairro'
	];
}
