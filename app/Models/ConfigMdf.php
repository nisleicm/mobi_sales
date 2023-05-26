<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ConfigMdf
 * 
 * @property string|null $caminho_certificado
 * @property string|null $senha_certificado
 * @property string|null $numero_serie_certificado
 * @property string|null $caminho_schemas
 * @property int|null $retrato_paisagem
 * @property int|null $normal_contingencia
 * @property string|null $logo
 * @property string|null $diretorio_arquivos
 * @property int|null $versao_documento
 * @property string|null $uf_sefaz
 * @property int|null $ambiente
 * @property string|null $host_proxy
 * @property string|null $host_porta
 * @property string|null $host_usuario
 * @property string|null $host_senha
 * @property int|null $numero
 * @property string|null $serie
 * @property int|null $tipo_emitente
 * @property int|null $retirar_acento
 * @property int $codempresa
 *
 * @package App\Models
 */
class ConfigMdf extends Model
{
	protected $table = 'config_mdf';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'retrato_paisagem' => 'int',
		'normal_contingencia' => 'int',
		'versao_documento' => 'int',
		'ambiente' => 'int',
		'numero' => 'int',
		'tipo_emitente' => 'int',
		'retirar_acento' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'caminho_certificado',
		'senha_certificado',
		'numero_serie_certificado',
		'caminho_schemas',
		'retrato_paisagem',
		'normal_contingencia',
		'logo',
		'diretorio_arquivos',
		'versao_documento',
		'uf_sefaz',
		'ambiente',
		'host_proxy',
		'host_porta',
		'host_usuario',
		'host_senha',
		'numero',
		'serie',
		'tipo_emitente',
		'retirar_acento',
		'codempresa'
	];
}
