<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CargaPdv
 * 
 * @property int $codigo
 * @property string|null $tabela
 * @property Carbon|null $datamov
 * @property Carbon|null $hora
 * @property string|null $indice
 * @property int|null $gerar
 * @property string|null $nome
 * @property int|null $movimento
 * @property int|null $ativo
 * @property string|null $codloja
 *
 * @package App\Models
 */
class CargaPdv extends Model
{
	protected $table = 'carga_pdv';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'datamov' => 'datetime',
		'hora' => 'datetime',
		'gerar' => 'int',
		'movimento' => 'int',
		'ativo' => 'int'
	];

	protected $fillable = [
		'codigo',
		'tabela',
		'datamov',
		'hora',
		'indice',
		'gerar',
		'nome',
		'movimento',
		'ativo',
		'codloja'
	];
}
