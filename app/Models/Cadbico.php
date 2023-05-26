<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cadbico
 * 
 * @property int $codigo
 * @property int|null $cod_produto
 * @property float|null $preco
 * @property int|null $cod_bomba
 * @property int|null $encerrante
 * @property int|null $tanque
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class Cadbico extends Model
{
	protected $table = 'cadbico';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'cod_produto' => 'int',
		'preco' => 'float',
		'cod_bomba' => 'int',
		'encerrante' => 'int',
		'tanque' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'cod_produto',
		'preco',
		'cod_bomba',
		'encerrante',
		'tanque',
		'codempresa'
	];
}
