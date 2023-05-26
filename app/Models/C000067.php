<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000067
 * 
 * @property string|null $codusuario
 * @property string|null $funcao
 * @property string|null $acesso
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000067 extends Model
{
	protected $table = 'c000067';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codusuario',
		'funcao',
		'acesso',
		'codempresa'
	];
}
