<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000007
 * 
 * @property string $codigo
 * @property string|null $nome
 * @property string|null $apelido
 * @property string|null $endereco
 * @property string|null $bairro
 * @property string|null $cidade
 * @property string|null $uf
 * @property string|null $cep
 * @property string|null $complemento
 * @property int|null $moradia
 * @property int|null $tipo
 * @property int|null $situacao
 * @property string|null $telefone1
 * @property string|null $telefone2
 * @property string|null $telefone3
 * @property string|null $celular
 * @property string|null $email
 * @property string|null $rg
 * @property string|null $cpf
 * @property string|null $filiacao
 * @property string|null $estadocivil
 * @property string|null $conjuge
 * @property string|null $profissao
 * @property string|null $empresa
 * @property float|null $renda
 * @property float|null $limite
 * @property string|null $ref1
 * @property string|null $ref2
 * @property string|null $codvendedor
 * @property Carbon|null $data_cadastro
 * @property Carbon|null $data_ultimacompra
 * @property string|null $obs1
 * @property string|null $obs2
 * @property string|null $obs3
 * @property string|null $obs4
 * @property string|null $obs5
 * @property string|null $obs6
 * @property string|null $nascimento
 * @property string|null $codregiao
 * @property string|null $codconvenio
 * @property string|null $codusuario
 * @property string|null $numero
 * @property string|null $rg_orgao
 * @property string|null $rg_estado
 * @property Carbon|null $rg_emissao
 * @property string|null $sexo
 * @property string|null $historico
 * @property Carbon|null $previsao
 * @property string|null $cnae
 * @property string|null $cod_municipio_ibge
 * @property string|null $ibge
 * @property string|null $tamanho_calca
 * @property string|null $tamanho_blusa
 * @property string|null $tamanho_sapato
 * @property string|null $corresp_endereco
 * @property string|null $corresp_bairro
 * @property string|null $corresp_cidade
 * @property string|null $corresp_uf
 * @property string|null $corresp_cep
 * @property string|null $corresp_complemento
 * @property string|null $rg_produtor
 * @property string|null $resp1_nome
 * @property string|null $resp1_cpf
 * @property string|null $resp1_rg
 * @property string|null $resp1_profissao
 * @property string|null $resp1_estado_civil
 * @property string|null $resp1_endereco
 * @property string|null $resp1_bairro
 * @property string|null $resp1_cidade
 * @property string|null $resp1_uf
 * @property string|null $resp1_cep
 * @property string|null $resp2_nome
 * @property string|null $resp2_cpf
 * @property string|null $resp2_rg
 * @property string|null $resp2_profissao
 * @property string|null $resp2_estado_civil
 * @property string|null $resp2_endereco
 * @property string|null $resp2_bairro
 * @property string|null $resp2_cidade
 * @property string|null $resp2_uf
 * @property string|null $resp2_cep
 * @property string|null $foto
 * @property string|null $condpgto
 * @property int|null $codfidelidade
 * @property string|null $nome_contato
 * @property int|null $situacao2
 * @property string|null $totalgeral
 * @property string|null $foto2
 * @property string|null $codfilial
 * @property string|null $codlocal
 * @property string|null $filiacao2
 * @property string|null $cpais
 * @property string|null $dpais
 * @property string|null $tipo_ie
 * @property string|null $consumidor_final
 * @property string|null $codloja
 * @property string|null $instrucoes1
 * @property string|null $instrucoes2
 * @property string|null $mensagem
 * @property int|null $idonline
 * @property float|null $credito
 * @property int|null $codgrupopgto
 * @property string|null $tipo_tabela
 * @property Carbon|null $datamov
 * @property int|null $codempresa
 * @property string|null $atualizar
 * @property Carbon|null $updated_at
 * @property Carbon|null $created_at
 * @property int $id
 * 
 * @property Collection|C000056[] $c000056_s
 *
 * @package App\Models
 */
class C000007 extends Model
{
	protected $table = 'c000007';
	protected $primaryKey = 'codigo';
	public $incrementing = false;

	protected $casts = [
		'moradia' => 'int',
		'tipo' => 'int',
		'situacao' => 'int',
		'renda' => 'float',
		'limite' => 'float',
		'data_cadastro' => 'datetime',
		'data_ultimacompra' => 'datetime',
		'rg_emissao' => 'datetime',
		'previsao' => 'datetime',
		'codfidelidade' => 'int',
		'situacao2' => 'int',
		'idonline' => 'int',
		'credito' => 'float',
		'codgrupopgto' => 'int',
		'datamov' => 'datetime',
		'codempresa' => 'int',
		'id' => 'int'
	];

	protected $fillable = [
		'nome',
		'apelido',
		'endereco',
		'bairro',
		'cidade',
		'uf',
		'cep',
		'complemento',
		'moradia',
		'tipo',
		'situacao',
		'telefone1',
		'telefone2',
		'telefone3',
		'celular',
		'email',
		'rg',
		'cpf',
		'filiacao',
		'estadocivil',
		'conjuge',
		'profissao',
		'empresa',
		'renda',
		'limite',
		'ref1',
		'ref2',
		'codvendedor',
		'data_cadastro',
		'data_ultimacompra',
		'obs1',
		'obs2',
		'obs3',
		'obs4',
		'obs5',
		'obs6',
		'nascimento',
		'codregiao',
		'codconvenio',
		'codusuario',
		'numero',
		'rg_orgao',
		'rg_estado',
		'rg_emissao',
		'sexo',
		'historico',
		'previsao',
		'cnae',
		'cod_municipio_ibge',
		'ibge',
		'tamanho_calca',
		'tamanho_blusa',
		'tamanho_sapato',
		'corresp_endereco',
		'corresp_bairro',
		'corresp_cidade',
		'corresp_uf',
		'corresp_cep',
		'corresp_complemento',
		'rg_produtor',
		'resp1_nome',
		'resp1_cpf',
		'resp1_rg',
		'resp1_profissao',
		'resp1_estado_civil',
		'resp1_endereco',
		'resp1_bairro',
		'resp1_cidade',
		'resp1_uf',
		'resp1_cep',
		'resp2_nome',
		'resp2_cpf',
		'resp2_rg',
		'resp2_profissao',
		'resp2_estado_civil',
		'resp2_endereco',
		'resp2_bairro',
		'resp2_cidade',
		'resp2_uf',
		'resp2_cep',
		'foto',
		'condpgto',
		'codfidelidade',
		'nome_contato',
		'situacao2',
		'totalgeral',
		'foto2',
		'codfilial',
		'codlocal',
		'filiacao2',
		'cpais',
		'dpais',
		'tipo_ie',
		'consumidor_final',
		'codloja',
		'instrucoes1',
		'instrucoes2',
		'mensagem',
		'idonline',
		'credito',
		'codgrupopgto',
		'tipo_tabela',
		'datamov',
		'codempresa',
		'atualizar',
		'id'
	];

	public function c000056_s()
	{
		return $this->hasMany(C000056::class, 'codcliente');
	}
}
