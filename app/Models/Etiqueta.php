<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Etiqueta
 * 
 * @property int $id
 * @property string|null $descricao
 * @property string|null $caminho
 * @property int $codempresa
 *
 * @package App\Models
 */
class Etiqueta extends Model
{
	protected $table = 'etiquetas';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'descricao',
		'caminho'
	];
}
