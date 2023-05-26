<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000103
 * 
 * @property int $codigo
 * @property string|null $nome
 * @property float|null $desc_max
 * @property float|null $preco
 * @property float|null $desc_acres
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000103 extends Model
{
	protected $table = 'c000103';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'desc_max' => 'float',
		'preco' => 'float',
		'desc_acres' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'nome',
		'desc_max',
		'preco',
		'desc_acres'
	];
}
