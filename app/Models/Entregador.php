<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Entregador
 * 
 * @property int $id
 * @property string|null $nome
 * @property string|null $celular
 * @property string|null $placa
 * @property int $codempresa
 *
 * @package App\Models
 */
class Entregador extends Model
{
	protected $table = 'entregador';
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'nome',
		'celular',
		'placa'
	];
}
