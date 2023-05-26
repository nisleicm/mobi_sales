<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Emailcorporativo
 * 
 * @property int $codigo
 * @property string|null $sigla
 * @property string|null $host
 * @property string|null $email
 * @property string|null $nome
 * @property string|null $porta
 * @property string|null $usuario
 * @property string|null $senha
 * @property int|null $tsl
 * @property int|null $ssl
 * @property int|null $usarhtml
 * @property int|null $usartxt
 * @property int|null $img
 * @property int|null $imghtml
 * @property int|null $pdfanexo
 * @property int|null $xmlanexo
 * @property int|null $thread
 * @property int|null $defaltcharset
 * @property int|null $idecharset
 * @property string|null $assunto
 * @property string|null $replayto
 * @property int|null $confirmarec
 * @property int|null $prioridade
 * @property string|null $textobody
 * @property string|null $textohtml
 * @property string|null $cc
 * @property string|null $bcc
 * @property int|null $codempresa
 * @property string|null $codloja
 * @property string|null $para
 * @property int|null $indicesigla
 *
 * @package App\Models
 */
class Emailcorporativo extends Model
{
	protected $table = 'emailcorporativo';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'tsl' => 'int',
		'ssl' => 'int',
		'usarhtml' => 'int',
		'usartxt' => 'int',
		'img' => 'int',
		'imghtml' => 'int',
		'pdfanexo' => 'int',
		'xmlanexo' => 'int',
		'thread' => 'int',
		'defaltcharset' => 'int',
		'idecharset' => 'int',
		'confirmarec' => 'int',
		'prioridade' => 'int',
		'codempresa' => 'int',
		'indicesigla' => 'int'
	];

	protected $fillable = [
		'sigla',
		'host',
		'email',
		'nome',
		'porta',
		'usuario',
		'senha',
		'tsl',
		'ssl',
		'usarhtml',
		'usartxt',
		'img',
		'imghtml',
		'pdfanexo',
		'xmlanexo',
		'thread',
		'defaltcharset',
		'idecharset',
		'assunto',
		'replayto',
		'confirmarec',
		'prioridade',
		'textobody',
		'textohtml',
		'cc',
		'bcc',
		'codempresa',
		'codloja',
		'para',
		'indicesigla'
	];
}
