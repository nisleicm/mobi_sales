<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000129
 * 
 * @property string $codigo
 * @property string $nome
 * @property string $cor
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000129 extends Model
{
	protected $table = 'c000129';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'nome',
		'cor'
	];
}
