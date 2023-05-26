<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000128
 * 
 * @property string $codigo
 * @property string $tamanho
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000128 extends Model
{
	protected $table = 'c000128';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'tamanho'
	];
}
