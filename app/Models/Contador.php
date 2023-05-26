<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contador
 * 
 * @property int $id
 * @property string $nome
 * @property string $cpf
 * @property string $crc
 * @property string $cnpj
 * @property string|null $cep
 * @property string|null $endereco
 * @property string|null $numero
 * @property string|null $complemento
 * @property string|null $bairro
 * @property string|null $fone
 * @property string|null $celular
 * @property string|null $fax
 * @property string|null $email
 * @property string|null $cod_municipio
 * @property int $codempresa
 *
 * @package App\Models
 */
class Contador extends Model
{
	protected $table = 'contador';
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'nome',
		'cpf',
		'crc',
		'cnpj',
		'cep',
		'endereco',
		'numero',
		'complemento',
		'bairro',
		'fone',
		'celular',
		'fax',
		'email',
		'cod_municipio'
	];
}
