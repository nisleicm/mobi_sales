<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C999999
 * 
 * @property string $codigo
 * @property string|null $nome
 * @property string|null $fantasia
 * @property string|null $endereco
 * @property string|null $bairro
 * @property string|null $cidade
 * @property string|null $uf
 * @property string|null $cep
 * @property string|null $telefone
 * @property string|null $cnpj
 * @property string|null $ie
 * @property string|null $email
 * @property string|null $homepage
 * @property string|null $responsavel
 * @property string|null $celular
 * @property string|null $logo
 * @property string|null $fax
 * @property string|null $numero
 * @property string|null $complemento
 * @property string|null $contribuinte_ipi
 * @property string|null $substituto_tributario
 * @property string|null $comentarios
 * @property Carbon|null $datahora_inicial
 * @property Carbon|null $datahora_final
 * @property Carbon|null $data_inventario
 * @property float|null $estoque
 * @property float|null $valor
 * @property int|null $conhecimento
 * @property string|null $cpf
 * @property string|null $rg
 * @property string|null $dia_vencimento_chave
 * @property string|null $insc_municipal
 * @property Carbon|null $data_abertura
 * @property string|null $cod_municipio_ibge
 * @property string|null $ibge
 * @property string|null $email_financeiro
 * @property int|null $contaemail
 * @property string|null $host
 * @property string|null $password
 * @property string|null $porta
 * @property string|null $username
 * @property int|null $usetls
 * @property int|null $sslmethod
 * @property string $pesquisar_placa_os
 * @property int $id
 * @property int|null $emp_indintermed
 * @property int $codempresa
 *
 * @package App\Models
 */
class C999999 extends Model
{
	protected $table = 'c999999';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'datahora_inicial' => 'datetime',
		'datahora_final' => 'datetime',
		'data_inventario' => 'datetime',
		'estoque' => 'float',
		'valor' => 'float',
		'conhecimento' => 'int',
		'data_abertura' => 'datetime',
		'contaemail' => 'int',
		'usetls' => 'int',
		'sslmethod' => 'int',
		'id' => 'int',
		'emp_indintermed' => 'int',
		'codempresa' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'nome',
		'fantasia',
		'endereco',
		'bairro',
		'cidade',
		'uf',
		'cep',
		'telefone',
		'cnpj',
		'ie',
		'email',
		'homepage',
		'responsavel',
		'celular',
		'logo',
		'fax',
		'numero',
		'complemento',
		'contribuinte_ipi',
		'substituto_tributario',
		'comentarios',
		'datahora_inicial',
		'datahora_final',
		'data_inventario',
		'estoque',
		'valor',
		'conhecimento',
		'cpf',
		'rg',
		'dia_vencimento_chave',
		'insc_municipal',
		'data_abertura',
		'cod_municipio_ibge',
		'ibge',
		'email_financeiro',
		'contaemail',
		'host',
		'password',
		'porta',
		'username',
		'usetls',
		'sslmethod',
		'pesquisar_placa_os',
		'id',
		'emp_indintermed',
		'codempresa'
	];
}
