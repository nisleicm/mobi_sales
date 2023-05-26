<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000009
 * 
 * @property string $codigo
 * @property string|null $nome
 * @property string|null $fantasia
 * @property string|null $endereco
 * @property string|null $bairro
 * @property string|null $cidade
 * @property string|null $uf
 * @property string|null $cep
 * @property string|null $complemento
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
 * @property string|null $banco
 * @property string|null $agencia
 * @property string|null $conta
 * @property string|null $obs1
 * @property string|null $obs2
 * @property string|null $obs3
 * @property Carbon|null $data
 * @property int|null $tipo
 * @property int|null $assistencia_tecnica
 * @property string|null $numero
 * @property string|null $im
 * @property string|null $rep_nome
 * @property string|null $rep_telefone
 * @property string|null $rep_endereco
 * @property string|null $rep_bairro
 * @property string|null $rep_complemento
 * @property string|null $rep_cidade
 * @property string|null $rep_uf
 * @property string|null $rep_cep
 * @property string|null $rep_telefone1
 * @property string|null $rep_telefone2
 * @property string|null $rep_telefone3
 * @property string|null $rep_fax
 * @property string|null $rep_cnpj
 * @property string|null $rep_ie
 * @property string|null $rep_home_page
 * @property string|null $rep_email
 * @property string|null $cnae
 * @property string|null $cod_municipio_ibge
 * @property string|null $ibge
 * @property string|null $logo
 * @property string|null $codloja
 * @property int|null $idonline
 * @property Carbon|null $datamov
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000009 extends Model
{
	protected $table = 'c000009';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'tipo' => 'int',
		'assistencia_tecnica' => 'int',
		'idonline' => 'int',
		'datamov' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'nome',
		'fantasia',
		'endereco',
		'bairro',
		'cidade',
		'uf',
		'cep',
		'complemento',
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
		'banco',
		'agencia',
		'conta',
		'obs1',
		'obs2',
		'obs3',
		'data',
		'tipo',
		'assistencia_tecnica',
		'numero',
		'im',
		'rep_nome',
		'rep_telefone',
		'rep_endereco',
		'rep_bairro',
		'rep_complemento',
		'rep_cidade',
		'rep_uf',
		'rep_cep',
		'rep_telefone1',
		'rep_telefone2',
		'rep_telefone3',
		'rep_fax',
		'rep_cnpj',
		'rep_ie',
		'rep_home_page',
		'rep_email',
		'cnae',
		'cod_municipio_ibge',
		'ibge',
		'logo',
		'codloja',
		'idonline',
		'datamov',
		'codempresa'
	];
}
