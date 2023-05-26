<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Produtoob
 * 
 * @property string|null $codprod
 * @property string|null $ingrediente
 * @property string|null $classetoxica
 * @property string|null $formulacao
 * @property string|null $primeirossocorros
 * @property string|null $sintomas
 * @property string|null $precaucao
 * @property string|null $disposicao
 * @property string|null $antidoto
 * @property string|null $concentracao
 * @property string|null $obs1
 * @property string|null $manejo
 * @property string|null $advertencias
 * @property string|null $prd_obs
 * @property string|null $aplicacao
 *
 * @package App\Models
 */
class Produtoob extends Model
{
	protected $table = 'produtoobs';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'codprod',
		'ingrediente',
		'classetoxica',
		'formulacao',
		'primeirossocorros',
		'sintomas',
		'precaucao',
		'disposicao',
		'antidoto',
		'concentracao',
		'obs1',
		'manejo',
		'advertencias',
		'prd_obs',
		'aplicacao'
	];
}
