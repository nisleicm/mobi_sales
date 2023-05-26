<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg0150
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_part
 * @property string|null $nome
 * @property string|null $cod_pais
 * @property string|null $cnpj
 * @property string|null $cpf
 * @property string|null $ie
 * @property string|null $cod_mun
 * @property string|null $suframa
 * @property string|null $endereco
 * @property string|null $num
 * @property string|null $compl
 * @property string|null $bairro
 *
 * @package App\Models
 */
class Reg0150 extends Model
{
	protected $table = 'reg_0150';
	public $timestamps = false;

	protected $casts = [
		'id_pai' => 'int',
		'linha' => 'int'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_part',
		'nome',
		'cod_pais',
		'cnpj',
		'cpf',
		'ie',
		'cod_mun',
		'suframa',
		'endereco',
		'num',
		'compl',
		'bairro'
	];
}
