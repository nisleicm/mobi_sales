<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Keyapi
 * 
 * @property int $codigo
 * @property int $codigo_user
 * @property string|null $nome_user
 * @property string|null $keyapi
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class Keyapi extends Model
{
	protected $table = 'keyapi';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'codigo_user' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo_user',
		'nome_user',
		'keyapi',
		'codempresa'
	];
}
