<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000010
 * 
 * @property string $codigo
 * @property string|null $nome
 * @property string|null $endereco
 * @property string|null $bairro
 * @property string|null $cidade
 * @property string|null $uf
 * @property string|null $cep
 * @property string|null $cpf
 * @property string|null $rg
 * @property string|null $telefone
 * @property string|null $celular
 * @property string|null $placa
 * @property string|null $ufplaca
 * @property string|null $obs1
 * @property string|null $obs2
 * @property string|null $obs3
 * @property Carbon|null $data
 * @property int|null $tipo
 * @property string|null $numero
 * @property string|null $cod_municipio_ibge
 * @property string|null $ibge
 * @property string|null $antt
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000010 extends Model
{
	protected $table = 'c000010';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'tipo' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'nome',
		'endereco',
		'bairro',
		'cidade',
		'uf',
		'cep',
		'cpf',
		'rg',
		'telefone',
		'celular',
		'placa',
		'ufplaca',
		'obs1',
		'obs2',
		'obs3',
		'data',
		'tipo',
		'numero',
		'cod_municipio_ibge',
		'ibge',
		'antt',
		'codempresa'
	];
}
