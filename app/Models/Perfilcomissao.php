<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Perfilcomissao
 * 
 * @property int $codigo
 * @property string $nome
 * @property int $codempresa
 *
 * @package App\Models
 */
class Perfilcomissao extends Model
{
	protected $table = 'perfilcomissao';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'nome',
		'codempresa'
	];
}
