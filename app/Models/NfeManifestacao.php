<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NfeManifestacao
 * 
 * @property string|null $chave
 * @property string|null $cnpj
 * @property string|null $nome
 * @property string|null $ie
 * @property Carbon|null $emissao
 * @property string|null $tipo
 * @property float|null $valor
 * @property string|null $situacao
 * @property string|null $nsu
 * @property Carbon|null $dataevento
 * @property string|null $manifesto
 * @property string|null $protocolo
 * @property string|null $importada
 * @property string|null $caminho_xml
 * @property string|null $xml
 * @property int $codempresa
 *
 * @package App\Models
 */
class NfeManifestacao extends Model
{
	protected $table = 'nfe_manifestacao';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'emissao' => 'datetime',
		'valor' => 'float',
		'dataevento' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'chave',
		'cnpj',
		'nome',
		'ie',
		'emissao',
		'tipo',
		'valor',
		'situacao',
		'nsu',
		'dataevento',
		'manifesto',
		'protocolo',
		'importada',
		'caminho_xml',
		'xml',
		'codempresa'
	];
}
