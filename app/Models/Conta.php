<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Conta
 * 
 * @property int|null $id
 * @property string|null $numconta
 * @property string|null $serie
 * @property Carbon|null $data_conta
 * @property Carbon|null $data_venc
 * @property float|null $valor_conta
 * @property float|null $valor_desconto
 * @property float|null $valor_acrescimo
 * @property float|null $juros
 * @property float|null $multa
 * @property Carbon|null $data_quit
 * @property float|null $valor_quitato
 * @property string|null $cliente
 * @property string|null $endereco
 * @property string|null $numero
 * @property string|null $complemento
 * @property string|null $bairro
 * @property string|null $cidade
 * @property string|null $cep
 * @property string|null $uf
 * @property string|null $cnpj_cpf
 * @property string|null $inscricao_rg
 * @property string|null $nosso_numero
 * @property string|null $boleto_impresso
 * @property int $codempresa
 *
 * @package App\Models
 */
class Conta extends Model
{
	protected $table = 'contas';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'data_conta' => 'datetime',
		'data_venc' => 'datetime',
		'valor_conta' => 'float',
		'valor_desconto' => 'float',
		'valor_acrescimo' => 'float',
		'juros' => 'float',
		'multa' => 'float',
		'data_quit' => 'datetime',
		'valor_quitato' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'id',
		'numconta',
		'serie',
		'data_conta',
		'data_venc',
		'valor_conta',
		'valor_desconto',
		'valor_acrescimo',
		'juros',
		'multa',
		'data_quit',
		'valor_quitato',
		'cliente',
		'endereco',
		'numero',
		'complemento',
		'bairro',
		'cidade',
		'cep',
		'uf',
		'cnpj_cpf',
		'inscricao_rg',
		'nosso_numero',
		'boleto_impresso',
		'codempresa'
	];
}
