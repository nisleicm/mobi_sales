<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ExcecaoSistema
 * 
 * @property int $codfilial
 * @property int $codexcecao
 * @property Carbon|null $data
 * @property string|null $hora
 * @property string|null $usuario
 * @property string|null $descricao
 * @property string|null $tela
 * @property string|null $versao
 * @property string|null $razaosocial
 * @property string|null $transmitido
 * @property int $codempresa
 *
 * @package App\Models
 */
class ExcecaoSistema extends Model
{
	protected $table = 'excecao_sistema';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codfilial' => 'int',
		'codexcecao' => 'int',
		'data' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'data',
		'hora',
		'usuario',
		'descricao',
		'tela',
		'versao',
		'razaosocial',
		'transmitido',
		'codempresa'
	];
}
