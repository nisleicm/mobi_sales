<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000004
 * 
 * @property string $codigo
 * @property string|null $filial
 * @property int|null $notafiscal
 * @property string|null $endereco
 * @property string|null $cidade
 * @property string|null $uf
 * @property string|null $cep
 * @property string|null $telefone
 * @property string|null $cnpj
 * @property string|null $ie
 * @property int|null $seqnf
 * @property string|null $fax
 * @property string|null $obs1
 * @property string|null $obs2
 * @property string|null $contribuinte_ipi
 * @property string|null $substituto_tributario
 * @property string|null $empresa_estadual
 * @property string|null $optante_simples
 * @property string|null $optante_super_simples
 * @property string|null $ecf
 * @property int|null $tipo
 * @property float|null $ipi
 * @property float|null $iss
 * @property string|null $numero
 * @property string|null $responsavel
 * @property string|null $complemento
 * @property string|null $bairro
 * @property string|null $farmacia_resp_tecnico
 * @property string|null $farmacia_crf
 * @property string|null $farmacia_cpf
 * @property Carbon|null $farmcia_data
 * @property string|null $farmacia_uf
 * @property string|null $farmacia_senha
 * @property string|null $farmacia_email
 * @property string|null $farmacia_login
 * @property string|null $farmacia_envio
 * @property int|null $conhecimento
 * @property string|null $industria
 * @property string|null $farmacia_numerolicenca
 * @property string|null $cod_municipio_ibge
 * @property string|null $ibge
 * @property float|null $pis
 * @property float|null $cofins
 * @property string|null $email
 * @property string|null $atividade
 * @property string|null $contador_cod_municipio_ibge
 * @property string|null $contador_nome
 * @property string|null $contador_cpf
 * @property string|null $contador_crc
 * @property string|null $contador_cnpj
 * @property string|null $contador_cep
 * @property string|null $contador_endereco
 * @property string|null $contador_numero
 * @property string|null $contador_complemento
 * @property string|null $contador_bairro
 * @property string|null $contador_fone
 * @property string|null $contador_fax
 * @property string|null $contador_email
 * @property string|null $insc_municipal
 * @property Carbon|null $data_abertura
 * @property string|null $cnae
 * @property string|null $crt
 * @property string|null $contador_cidade
 * @property string|null $contador_cod_municipio
 * @property string|null $contador_uf
 * @property int|null $permite_credito
 * @property string|null $fantasia
 * @property float|null $dfixas
 * @property int|null $tipocalculo
 * @property string|null $serie_cte
 * @property string|null $seq_cte
 * @property string|null $cod_pais
 * @property string|null $pais
 * @property string|null $cst_ipi_saida
 * @property int|null $id_cliente
 * @property string|null $razao_social
 * @property string|null $cfop_venda_dentro
 * @property string|null $cfop_venda_fora
 * @property string|null $cfop_dev_dentro
 * @property string|null $cfop_dev_fora
 * @property string|null $homepage
 * @property string|null $aidf
 * @property string|null $ninicial
 * @property string|null $nfinal
 * @property string|null $n_nf_d
 * @property string|null $validade
 * @property string|null $rntrc
 * @property string|null $mail_server
 * @property string|null $mail_porta
 * @property string|null $mail_username
 * @property string|null $mail_password
 * @property string|null $mail_cabecalho
 * @property string|null $mail_assunto
 * @property string|null $mail_ssl
 * @property string|null $mail_tls
 * @property string|null $logo
 * @property string|null $mail_mensagem
 * @property string|null $obs_fiscal_nfe
 * @property int|null $serie_mdfe
 * @property int|null $numero_mdfe
 * @property string|null $reptec_cnpj
 * @property string|null $reptec_contato
 * @property string|null $reptec_email
 * @property string|null $reptec_fone
 * @property int|null $reptec_idcsrt
 * @property string|null $reptec_csrt
 * @property float|null $percentual_credito_icms
 * @property int|null $idonline
 * @property string|null $revenda_nome
 * @property string|null $revenda_cnpj
 * @property string|null $revenda_telefone
 * @property string|null $revenda_email
 * @property string|null $codloja
 * @property int|null $emp_indintermed
 * @property int $codempresa
 * @property int|null $inativar
 * @property int|null $regesp
 * @property int|null $prestador_servico
 * @property string|null $atividade_prestador
 * @property string|null $llc116
 *
 * @package App\Models
 */
class C000004 extends Model
{
	protected $table = 'c000004';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'notafiscal' => 'int',
		'seqnf' => 'int',
		'tipo' => 'int',
		'ipi' => 'float',
		'iss' => 'float',
		'farmcia_data' => 'datetime',
		'conhecimento' => 'int',
		'pis' => 'float',
		'cofins' => 'float',
		'data_abertura' => 'datetime',
		'permite_credito' => 'int',
		'dfixas' => 'float',
		'tipocalculo' => 'int',
		'id_cliente' => 'int',
		'serie_mdfe' => 'int',
		'numero_mdfe' => 'int',
		'reptec_idcsrt' => 'int',
		'percentual_credito_icms' => 'float',
		'idonline' => 'int',
		'emp_indintermed' => 'int',
		'codempresa' => 'int',
		'inativar' => 'int',
		'regesp' => 'int',
		'prestador_servico' => 'int'
	];

	protected $hidden = [
		'mail_password'
	];

	protected $fillable = [
		'filial',
		'notafiscal',
		'endereco',
		'cidade',
		'uf',
		'cep',
		'telefone',
		'cnpj',
		'ie',
		'seqnf',
		'fax',
		'obs1',
		'obs2',
		'contribuinte_ipi',
		'substituto_tributario',
		'empresa_estadual',
		'optante_simples',
		'optante_super_simples',
		'ecf',
		'tipo',
		'ipi',
		'iss',
		'numero',
		'responsavel',
		'complemento',
		'bairro',
		'farmacia_resp_tecnico',
		'farmacia_crf',
		'farmacia_cpf',
		'farmcia_data',
		'farmacia_uf',
		'farmacia_senha',
		'farmacia_email',
		'farmacia_login',
		'farmacia_envio',
		'conhecimento',
		'industria',
		'farmacia_numerolicenca',
		'cod_municipio_ibge',
		'ibge',
		'pis',
		'cofins',
		'email',
		'atividade',
		'contador_cod_municipio_ibge',
		'contador_nome',
		'contador_cpf',
		'contador_crc',
		'contador_cnpj',
		'contador_cep',
		'contador_endereco',
		'contador_numero',
		'contador_complemento',
		'contador_bairro',
		'contador_fone',
		'contador_fax',
		'contador_email',
		'insc_municipal',
		'data_abertura',
		'cnae',
		'crt',
		'contador_cidade',
		'contador_cod_municipio',
		'contador_uf',
		'permite_credito',
		'fantasia',
		'dfixas',
		'tipocalculo',
		'serie_cte',
		'seq_cte',
		'cod_pais',
		'pais',
		'cst_ipi_saida',
		'id_cliente',
		'razao_social',
		'cfop_venda_dentro',
		'cfop_venda_fora',
		'cfop_dev_dentro',
		'cfop_dev_fora',
		'homepage',
		'aidf',
		'ninicial',
		'nfinal',
		'n_nf_d',
		'validade',
		'rntrc',
		'mail_server',
		'mail_porta',
		'mail_username',
		'mail_password',
		'mail_cabecalho',
		'mail_assunto',
		'mail_ssl',
		'mail_tls',
		'logo',
		'mail_mensagem',
		'obs_fiscal_nfe',
		'serie_mdfe',
		'numero_mdfe',
		'reptec_cnpj',
		'reptec_contato',
		'reptec_email',
		'reptec_fone',
		'reptec_idcsrt',
		'reptec_csrt',
		'percentual_credito_icms',
		'idonline',
		'revenda_nome',
		'revenda_cnpj',
		'revenda_telefone',
		'revenda_email',
		'codloja',
		'emp_indintermed',
		'codempresa',
		'inativar',
		'regesp',
		'prestador_servico',
		'atividade_prestador',
		'llc116'
	];
}
