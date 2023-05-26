<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000125
 * 
 * @property string $codigo
 * @property string $codcliente
 * @property float|null $preco
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000125 extends Model
{
	protected $table = 'c000125';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'preco' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codcliente',
		'preco'
	];
}
