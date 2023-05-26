<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoServico
 * 
 * @property int $id
 * @property string|null $codigo
 * @property string|null $descricao
 * @property int $codempresa
 *
 * @package App\Models
 */
class TipoServico extends Model
{
	protected $table = 'tipo_servico';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'id',
		'codigo',
		'descricao',
		'codempresa'
	];
}
