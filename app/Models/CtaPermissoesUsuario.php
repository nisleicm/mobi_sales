<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CtaPermissoesUsuario
 * 
 * @property int|null $usu_codigo
 * @property int|null $men_codigo
 * @property int|null $pu_novo
 * @property int|null $pu_alterar
 * @property int|null $pu_apagar
 * @property int|null $pu_consultar
 * @property int $codempresa
 *
 * @package App\Models
 */
class CtaPermissoesUsuario extends Model
{
	protected $table = 'cta_permissoes_usuarios';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'usu_codigo' => 'int',
		'men_codigo' => 'int',
		'pu_novo' => 'int',
		'pu_alterar' => 'int',
		'pu_apagar' => 'int',
		'pu_consultar' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'usu_codigo',
		'men_codigo',
		'pu_novo',
		'pu_alterar',
		'pu_apagar',
		'pu_consultar',
		'codempresa'
	];
}
