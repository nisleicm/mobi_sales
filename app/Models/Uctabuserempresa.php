<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Uctabuserempresa
 * 
 * @property int|null $uciduser
 * @property int|null $codempresa
 * @property int $codigo
 *
 * @package App\Models
 */
class Uctabuserempresa extends Model
{
	protected $table = 'uctabuserempresas';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'uciduser' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'uciduser',
		'codempresa'
	];
}
