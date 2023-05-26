<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MtMesa
 * 
 * @property int $codigo
 * @property string|null $descricao
 * @property int|null $ativa
 * @property int $codempresa
 *
 * @package App\Models
 */
class MtMesa extends Model
{
	protected $table = 'mt_mesa';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'ativa' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'descricao',
		'ativa'
	];
}
