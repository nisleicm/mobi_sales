<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tecnico
 * 
 * @property string $codigo
 * @property string|null $nome
 * @property string|null $especialidade
 * @property string|null $numero_registro
 * @property string|null $conselho_profissional
 * @property string|null $uf_conselho
 * @property int $codempresa
 *
 * @package App\Models
 */
class Tecnico extends Model
{
	protected $table = 'tecnicos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'nome',
		'especialidade',
		'numero_registro',
		'conselho_profissional',
		'uf_conselho'
	];
}
