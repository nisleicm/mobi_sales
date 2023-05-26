<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C25Converso
 * 
 * @property int $codigo
 * @property string|null $codproduto
 * @property string|null $descricao
 * @property string|null $un
 * @property float|null $fator
 * @property int|null $tipo
 * @property float|null $precovenda
 * @property int|null $valorinteiro
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class C25Converso extends Model
{
	protected $table = 'c25_conversoes';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'fator' => 'float',
		'tipo' => 'int',
		'precovenda' => 'float',
		'valorinteiro' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codproduto',
		'descricao',
		'un',
		'fator',
		'tipo',
		'precovenda',
		'valorinteiro',
		'codempresa'
	];
}
