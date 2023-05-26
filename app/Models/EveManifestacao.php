<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EveManifestacao
 * 
 * @property int $codigo
 * @property string|null $chave
 * @property string|null $cnpj
 * @property string|null $nome
 * @property string|null $ie
 * @property Carbon|null $emissao
 * @property string|null $tipo
 * @property float|null $valor
 * @property int|null $situacao
 * @property int|null $confirmacao
 * @property string|null $nsu
 * @property Carbon|null $dataevento
 * @property string|null $protocolo
 * @property string|null $empresa
 * @property string|null $digval
 * @property string|null $sultimonsu
 * @property int|null $marca
 * @property int $codempresa
 *
 * @package App\Models
 */
class EveManifestacao extends Model
{
	protected $table = 'eve_manifestacao';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'emissao' => 'datetime',
		'valor' => 'float',
		'situacao' => 'int',
		'confirmacao' => 'int',
		'dataevento' => 'datetime',
		'marca' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'chave',
		'cnpj',
		'nome',
		'ie',
		'emissao',
		'tipo',
		'valor',
		'situacao',
		'confirmacao',
		'nsu',
		'dataevento',
		'protocolo',
		'empresa',
		'digval',
		'sultimonsu',
		'marca',
		'codempresa'
	];
}
