<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000118
 * 
 * @property string $codigo
 * @property string|null $mes_ano
 * @property string|null $situacao
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000118 extends Model
{
	protected $table = 'c000118';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'mes_ano',
		'situacao'
	];
}
