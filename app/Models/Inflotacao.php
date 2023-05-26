<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inflotacao
 * 
 * @property int $codigo
 * @property int $ceporigem
 * @property int $cepdestino
 * @property float $latitudeo
 * @property float $latituded
 * @property float $longo
 * @property float $longd
 *
 * @package App\Models
 */
class Inflotacao extends Model
{
	protected $table = 'inflotacao';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'ceporigem' => 'int',
		'cepdestino' => 'int',
		'latitudeo' => 'float',
		'latituded' => 'float',
		'longo' => 'float',
		'longd' => 'float'
	];

	protected $fillable = [
		'codigo',
		'ceporigem',
		'cepdestino',
		'latitudeo',
		'latituded',
		'longo',
		'longd'
	];
}
