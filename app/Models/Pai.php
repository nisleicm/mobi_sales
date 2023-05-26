<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pai
 * 
 * @property string|null $codigo
 * @property string|null $descricao
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class Pai extends Model
{
	protected $table = 'pais';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'descricao',
		'codempresa'
	];
}
