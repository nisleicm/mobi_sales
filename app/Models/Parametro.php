<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Parametro
 * 
 * @property string|null $parnom
 * @property string|null $parval
 * @property string|null $partip
 * @property int $codempresa
 *
 * @package App\Models
 */
class Parametro extends Model
{
	protected $table = 'parametros';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'parnom',
		'parval',
		'partip',
		'codempresa'
	];
}
