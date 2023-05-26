<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Parametrizacao
 * 
 * @property string $codparametro
 * @property int $codfilial
 * @property string|null $descricao
 * @property string|null $valor
 * @property string|null $tipo
 * @property string|null $tabela
 * @property string|null $campo
 * @property string|null $transmitido
 * @property string|null $modulo
 * @property int $codempresa
 *
 * @package App\Models
 */
class Parametrizacao extends Model
{
	protected $table = 'parametrizacao';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codfilial' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'descricao',
		'valor',
		'tipo',
		'tabela',
		'campo',
		'transmitido',
		'modulo',
		'codempresa'
	];
}
