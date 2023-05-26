<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cnae
 * 
 * @property string $codigo
 * @property string|null $cnae
 * @property string|null $descricao
 * @property string|null $abreviado
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class Cnae extends Model
{
	protected $table = 'cnae';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'cnae',
		'descricao',
		'abreviado',
		'codempresa'
	];
}
