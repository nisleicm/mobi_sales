<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000122
 * 
 * @property string $codigo
 * @property string|null $nome
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000122 extends Model
{
	protected $table = 'c000122';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'nome'
	];
}
