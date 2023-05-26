<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inconsistencium
 * 
 * @property int $id
 * @property string $tipo
 * @property string $id_mensagem
 * @property string|null $id_campo
 * @property string|null $valor_campo
 * @property string|null $valor_esperado_campo
 * @property string|null $nome_registro
 * @property string|null $conteudo_linha
 * @property int|null $numero_linha
 * @property int|null $id_registro_bd
 * @property int|null $id_registro_pai_bd
 * @property string|null $parametros_mensagem
 *
 * @package App\Models
 */
class Inconsistencium extends Model
{
	protected $table = 'inconsistencia';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'numero_linha' => 'int',
		'id_registro_bd' => 'int',
		'id_registro_pai_bd' => 'int'
	];

	protected $fillable = [
		'tipo',
		'id_mensagem',
		'id_campo',
		'valor_campo',
		'valor_esperado_campo',
		'nome_registro',
		'conteudo_linha',
		'numero_linha',
		'id_registro_bd',
		'id_registro_pai_bd',
		'parametros_mensagem'
	];
}
