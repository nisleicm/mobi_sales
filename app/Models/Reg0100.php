<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg0100
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $nome
 * @property string|null $cpf
 * @property string|null $crc
 * @property string|null $cnpj
 * @property string|null $cep
 * @property string|null $endereco
 * @property string|null $num
 * @property string|null $compl
 * @property string|null $bairro
 * @property string|null $fone
 * @property string|null $fax
 * @property string|null $email
 * @property string|null $cod_mun
 *
 * @package App\Models
 */
class Reg0100 extends Model
{
	protected $table = 'reg_0100';
	public $timestamps = false;

	protected $casts = [
		'id_pai' => 'int',
		'linha' => 'int'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'nome',
		'cpf',
		'crc',
		'cnpj',
		'cep',
		'endereco',
		'num',
		'compl',
		'bairro',
		'fone',
		'fax',
		'email',
		'cod_mun'
	];
}
