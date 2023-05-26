<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cadbomba
 * 
 * @property int $codigo
 * @property int|null $cod_produto
 * @property string|null $nome_combustivel
 * @property string|null $serie
 * @property string|null $fabricante
 * @property string|null $modelo
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class Cadbomba extends Model
{
	protected $table = 'cadbomba';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'cod_produto' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'cod_produto',
		'nome_combustivel',
		'serie',
		'fabricante',
		'modelo',
		'codempresa'
	];
}
