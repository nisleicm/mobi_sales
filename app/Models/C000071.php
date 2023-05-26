<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000071
 * 
 * @property string $codigo
 * @property string|null $nome
 * @property string|null $endereco
 * @property string|null $bairro
 * @property string|null $cidade
 * @property string|null $uf
 * @property string|null $cep
 * @property string|null $telefone1
 * @property string|null $telefone2
 * @property string|null $contato
 * @property string|null $celular
 * @property string|null $dia_pgto
 * @property string|null $cnpj
 * @property string|null $ie
 * @property Carbon|null $data_cadastro
 * @property string|null $fax
 * @property string|null $email
 * @property float|null $desconto
 * @property int|null $dia_fechamento
 * @property int|null $dia_pagamento
 * @property float|null $limite
 * @property string|null $numero
 * @property string|null $codloja
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000071 extends Model
{
	protected $table = 'c000071';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data_cadastro' => 'datetime',
		'desconto' => 'float',
		'dia_fechamento' => 'int',
		'dia_pagamento' => 'int',
		'limite' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'nome',
		'endereco',
		'bairro',
		'cidade',
		'uf',
		'cep',
		'telefone1',
		'telefone2',
		'contato',
		'celular',
		'dia_pgto',
		'cnpj',
		'ie',
		'data_cadastro',
		'fax',
		'email',
		'desconto',
		'dia_fechamento',
		'dia_pagamento',
		'limite',
		'numero',
		'codloja',
		'codempresa'
	];
}
