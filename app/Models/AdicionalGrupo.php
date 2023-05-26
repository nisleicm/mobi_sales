<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AdicionalGrupo
 * 
 * @property int $codadicional
 * @property string|null $codgrupo
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class AdicionalGrupo extends Model
{
	protected $table = 'adicional_grupo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codadicional' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codadicional',
		'codgrupo',
		'codempresa'
	];
}
