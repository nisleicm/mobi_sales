<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000019
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
 * @property string|null $fax
 * @property string|null $contato1
 * @property string|null $contato2
 * @property string|null $celular1
 * @property string|null $celular2
 * @property string|null $email
 * @property string|null $homepage
 * @property string|null $cnpj
 * @property string|null $ie
 * @property Carbon|null $data
 * @property float|null $comissao
 * @property string|null $numero
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000019 extends Model
{
	protected $table = 'c000019';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'comissao' => 'float',
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
		'fax',
		'contato1',
		'contato2',
		'celular1',
		'celular2',
		'email',
		'homepage',
		'cnpj',
		'ie',
		'data',
		'comissao',
		'numero',
		'codempresa'
	];
}
