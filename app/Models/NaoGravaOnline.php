<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NaoGravaOnline
 * 
 * @property int $id
 * @property string|null $tipo
 * @property string|null $codigo
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class NaoGravaOnline extends Model
{
	protected $table = 'nao_grava_online';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'id',
		'tipo',
		'codigo',
		'codempresa'
	];
}
