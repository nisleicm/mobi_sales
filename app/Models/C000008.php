<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000008
 * 
 * @property string $codigo
 * @property string|null $nome
 * @property string|null $endereco
 * @property string|null $bairro
 * @property string|null $cidade
 * @property string|null $uf
 * @property string|null $cep
 * @property string|null $telefone
 * @property string|null $celular
 * @property string|null $email
 * @property string|null $cpf
 * @property string|null $rg
 * @property string|null $ctps
 * @property string|null $funcao
 * @property Carbon|null $data_admissao
 * @property Carbon|null $data_demissao
 * @property int|null $situacao
 * @property float|null $salario
 * @property float|null $comissao
 * @property string|null $obs1
 * @property string|null $obs2
 * @property string|null $obs3
 * @property Carbon|null $nascimento
 * @property int|null $f_caixa
 * @property int|null $f_vendedor
 * @property int|null $f_tecnico
 * @property string|null $numero
 * @property string|null $senha
 * @property string|null $ativa
 * @property int|null $perfil_comissao
 * @property string|null $codfilial
 * @property string|null $codlocal
 * @property string|null $aprova_desconto
 * @property string|null $abrir_caixa
 * @property string|null $fecha_caixa
 * @property string|null $configuracoes
 * @property string|null $cancelar_venda
 * @property string|null $cancelar_item
 * @property string|null $codloja
 * @property Carbon|null $datamov
 * @property int $codempresa
 * @property int $id
 * @property Carbon|null $updated_at
 * @property Carbon|null $created_at
 *
 * @package App\Models
 */
class C000008 extends Model
{
	protected $table = 'c000008';
	protected $primaryKey = 'codigo';
	public $incrementing = false;

	protected $casts = [
		'data_admissao' => 'datetime',
		'data_demissao' => 'datetime',
		'situacao' => 'int',
		'salario' => 'float',
		'comissao' => 'float',
		'nascimento' => 'datetime',
		'f_caixa' => 'int',
		'f_vendedor' => 'int',
		'f_tecnico' => 'int',
		'perfil_comissao' => 'int',
		'datamov' => 'datetime',
		'codempresa' => 'int',
		'id' => 'int'
	];

	protected $fillable = [
		'nome',
		'endereco',
		'bairro',
		'cidade',
		'uf',
		'cep',
		'telefone',
		'celular',
		'email',
		'cpf',
		'rg',
		'ctps',
		'funcao',
		'data_admissao',
		'data_demissao',
		'situacao',
		'salario',
		'comissao',
		'obs1',
		'obs2',
		'obs3',
		'nascimento',
		'f_caixa',
		'f_vendedor',
		'f_tecnico',
		'numero',
		'senha',
		'ativa',
		'perfil_comissao',
		'codfilial',
		'codlocal',
		'aprova_desconto',
		'abrir_caixa',
		'fecha_caixa',
		'configuracoes',
		'cancelar_venda',
		'cancelar_item',
		'codloja',
		'datamov',
		'codempresa',
		'id'
	];
}
