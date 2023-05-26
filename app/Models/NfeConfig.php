<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NfeConfig
 * 
 * @property int $codempresa
 * @property string|null $crt_caminho
 * @property string|null $crt_senha
 * @property string|null $crt_seri
 * @property int|null $ger_danfe
 * @property int|null $ger_forma_emissao
 * @property string|null $ger_logomarca
 * @property int|null $ger_salvar
 * @property string|null $ger_path_salvar
 * @property int|null $ger_sslib
 * @property int|null $ger_cryptlib
 * @property int|null $ger_httplib
 * @property int|null $ger_xmlsignlib
 * @property int|null $ger_ssltype
 * @property int|null $ger_retirar_acentos
 * @property int|null $ger_retirar_espacos
 * @property string|null $ger_infocomlpdrao
 * @property int|null $ger_versaodf
 * @property int|null $arq_separar_por_cnpj
 * @property int|null $arq_eparar_por_mes
 * @property int|null $arq_salvar_apenas_processados
 * @property string|null $arq_path_nfe
 * @property string|null $arq_path_inu
 * @property string|null $arq_path_logs
 * @property string|null $arq_path_schemas
 * @property string|null $arq_diretorio_ibpt
 * @property string|null $ws_uf
 * @property int|null $ws_ambiente
 * @property int|null $ws_visualizar
 * @property int|null $ws_timeout
 * @property string|null $ws_arq_ini_link_servicos
 * @property string|null $proxy_host
 * @property int|null $proxy_porta
 * @property string|null $proxy_user
 * @property string|null $proxy_pass
 * @property string|null $email_host
 * @property string|null $email_email
 * @property string|null $email_nome
 * @property int|null $email_porta
 * @property string|null $email_usuario
 * @property string|null $email_senha
 * @property string|null $email_assunto
 * @property string|null $email_arquivo_mensagem
 * @property int|null $email_mensagem_html
 * @property int|null $email_confirmacao_recebimento
 * @property int|null $email_ssl
 * @property int|null $email_tls
 *
 * @package App\Models
 */
class NfeConfig extends Model
{
	protected $table = 'nfe_config';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int',
		'ger_danfe' => 'int',
		'ger_forma_emissao' => 'int',
		'ger_salvar' => 'int',
		'ger_sslib' => 'int',
		'ger_cryptlib' => 'int',
		'ger_httplib' => 'int',
		'ger_xmlsignlib' => 'int',
		'ger_ssltype' => 'int',
		'ger_retirar_acentos' => 'int',
		'ger_retirar_espacos' => 'int',
		'ger_versaodf' => 'int',
		'arq_separar_por_cnpj' => 'int',
		'arq_eparar_por_mes' => 'int',
		'arq_salvar_apenas_processados' => 'int',
		'ws_ambiente' => 'int',
		'ws_visualizar' => 'int',
		'ws_timeout' => 'int',
		'proxy_porta' => 'int',
		'email_porta' => 'int',
		'email_mensagem_html' => 'int',
		'email_confirmacao_recebimento' => 'int',
		'email_ssl' => 'int',
		'email_tls' => 'int'
	];

	protected $fillable = [
		'codempresa',
		'crt_caminho',
		'crt_senha',
		'crt_seri',
		'ger_danfe',
		'ger_forma_emissao',
		'ger_logomarca',
		'ger_salvar',
		'ger_path_salvar',
		'ger_sslib',
		'ger_cryptlib',
		'ger_httplib',
		'ger_xmlsignlib',
		'ger_ssltype',
		'ger_retirar_acentos',
		'ger_retirar_espacos',
		'ger_infocomlpdrao',
		'ger_versaodf',
		'arq_separar_por_cnpj',
		'arq_eparar_por_mes',
		'arq_salvar_apenas_processados',
		'arq_path_nfe',
		'arq_path_inu',
		'arq_path_logs',
		'arq_path_schemas',
		'arq_diretorio_ibpt',
		'ws_uf',
		'ws_ambiente',
		'ws_visualizar',
		'ws_timeout',
		'ws_arq_ini_link_servicos',
		'proxy_host',
		'proxy_porta',
		'proxy_user',
		'proxy_pass',
		'email_host',
		'email_email',
		'email_nome',
		'email_porta',
		'email_usuario',
		'email_senha',
		'email_assunto',
		'email_arquivo_mensagem',
		'email_mensagem_html',
		'email_confirmacao_recebimento',
		'email_ssl',
		'email_tls'
	];
}
