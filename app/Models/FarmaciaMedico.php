<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FarmaciaMedico
 * 
 * @property string $codigo
 * @property string|null $nome
 * @property string|null $numero_registro
 * @property string|null $conselho_profissional
 * @property string|null $uf_conselho
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class FarmaciaMedico extends Model
{
	protected $table = 'farmacia_medico';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'nome',
		'numero_registro',
		'conselho_profissional',
		'uf_conselho',
		'codempresa'
	];
}
