<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Fidelidade
 * 
 * @property int $codigo
 * @property string $nome
 * @property string|null $descricao
 * @property int $codempresa
 *
 * @package App\Models
 */
class Fidelidade extends Model
{
	protected $table = 'fidelidades';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'nome',
		'descricao',
		'codempresa'
	];
}
