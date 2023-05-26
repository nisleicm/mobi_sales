<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Setor
 * 
 * @property string $codigo
 * @property string|null $nome
 * @property int $codempresa
 *
 * @package App\Models
 */
class Setor extends Model
{
	protected $table = 'setor';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'nome'
	];
}
