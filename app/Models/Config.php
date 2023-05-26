<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Config
 * 
 * @property int|null $id
 * @property string|null $path_remessa
 * @property string|null $path_retorno
 * @property string|null $path_logotipo
 * @property string|null $path_gerarpdf
 * @property string|null $mensagem
 * @property int|null $dias_protesto
 * @property string|null $especie
 * @property string|null $moeda
 * @property string|null $aceite
 * @property string|null $carteira
 * @property string|null $local_pagto
 * @property string|null $instrucao_1
 * @property string|null $instrucao_2
 * @property int|null $cont_remessa
 * @property int|null $layout1
 * @property int|null $layout2
 * @property int|null $layout3
 * @property int $codempresa
 *
 * @package App\Models
 */
class Config extends Model
{
	protected $table = 'config';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'dias_protesto' => 'int',
		'cont_remessa' => 'int',
		'layout1' => 'int',
		'layout2' => 'int',
		'layout3' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'id',
		'path_remessa',
		'path_retorno',
		'path_logotipo',
		'path_gerarpdf',
		'mensagem',
		'dias_protesto',
		'especie',
		'moeda',
		'aceite',
		'carteira',
		'local_pagto',
		'instrucao_1',
		'instrucao_2',
		'cont_remessa',
		'layout1',
		'layout2',
		'layout3',
		'codempresa'
	];
}
