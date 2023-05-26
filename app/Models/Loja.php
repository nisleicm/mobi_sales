<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Loja
 * 
 * @property int $codigo
 * @property string $codloja
 * @property string|null $codfilial
 * @property string|null $fantasia
 * @property string|null $cnpj
 * @property string|null $endereco
 * @property string|null $bairro
 * @property string|null $cidade
 * @property string|null $numero
 * @property string|null $uf
 * @property string|null $obs
 *
 * @package App\Models
 */
class Loja extends Model
{
	protected $table = 'loja';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int'
	];

	protected $fillable = [
		'codigo',
		'codloja',
		'codfilial',
		'fantasia',
		'cnpj',
		'endereco',
		'bairro',
		'cidade',
		'numero',
		'uf',
		'obs'
	];
}
