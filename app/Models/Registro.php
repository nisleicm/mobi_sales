<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Registro
 * 
 * @property string|null $dados
 * @property int $codempresa
 *
 * @package App\Models
 */
class Registro extends Model
{
	protected $table = 'registro';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'dados',
		'codempresa'
	];
}
