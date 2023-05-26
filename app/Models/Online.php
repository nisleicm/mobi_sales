<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Online
 * 
 * @property int $id
 * @property string|null $tipo
 * @property string|null $acao
 * @property string|null $codigo
 * @property int|null $idfilialonline
 * @property int|null $idonline
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class Online extends Model
{
	protected $table = 'online';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'idfilialonline' => 'int',
		'idonline' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'id',
		'tipo',
		'acao',
		'codigo',
		'idfilialonline',
		'idonline',
		'codempresa'
	];
}
