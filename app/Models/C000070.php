<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000070
 * 
 * @property string|null $codcliente
 * @property string|null $nome
 * @property string|null $parentesco
 * @property string|null $telefone
 * @property int|null $codigo
 * @property string|null $codloja
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000070 extends Model
{
	protected $table = 'c000070';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codcliente',
		'nome',
		'parentesco',
		'telefone',
		'codigo',
		'codloja',
		'codempresa'
	];
}
