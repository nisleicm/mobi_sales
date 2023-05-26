<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Adicionai
 * 
 * @property int $codigo
 * @property string $nome
 * @property float|null $valor
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class Adicionai extends Model
{
	protected $table = 'adicionais';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'valor' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'nome',
		'valor',
		'codempresa'
	];
}
