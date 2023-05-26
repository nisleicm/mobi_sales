<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CtaPermissoesGrupo
 * 
 * @property int|null $gru_codigo
 * @property int|null $men_codigo
 * @property int|null $pg_novo
 * @property int|null $pg_alterar
 * @property int|null $pg_apagar
 * @property int|null $pg_consultar
 * @property int $codempresa
 *
 * @package App\Models
 */
class CtaPermissoesGrupo extends Model
{
	protected $table = 'cta_permissoes_grupos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'gru_codigo' => 'int',
		'men_codigo' => 'int',
		'pg_novo' => 'int',
		'pg_alterar' => 'int',
		'pg_apagar' => 'int',
		'pg_consultar' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'gru_codigo',
		'men_codigo',
		'pg_novo',
		'pg_alterar',
		'pg_apagar',
		'pg_consultar',
		'codempresa'
	];
}
