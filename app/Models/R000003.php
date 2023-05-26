<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class R000003
 * 
 * @property int $mesa
 * @property int $codigo
 * @property string|null $ativa
 * @property int $codempresa
 *
 * @package App\Models
 */
class R000003 extends Model
{
	protected $table = 'r000003';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'mesa' => 'int',
		'codigo' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'mesa',
		'ativa'
	];
}
