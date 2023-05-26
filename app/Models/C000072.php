<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000072
 * 
 * @property string|null $comando
 * @property string|null $numero
 * @property float|null $desconto
 * @property float|null $acrescimo
 * @property float|null $dinheiro
 * @property float|null $chequeav
 * @property float|null $chequeap
 * @property float|null $cartaocred
 * @property float|null $cartaodeb
 * @property float|null $promissoria
 * @property string|null $cliente
 * @property string|null $endereco
 * @property string|null $cidade
 * @property string|null $cpf
 * @property string|null $convenio
 * @property string|null $vendedor
 * @property string|null $sequencia
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000072 extends Model
{
	protected $table = 'c000072';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'desconto' => 'float',
		'acrescimo' => 'float',
		'dinheiro' => 'float',
		'chequeav' => 'float',
		'chequeap' => 'float',
		'cartaocred' => 'float',
		'cartaodeb' => 'float',
		'promissoria' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'comando',
		'numero',
		'desconto',
		'acrescimo',
		'dinheiro',
		'chequeav',
		'chequeap',
		'cartaocred',
		'cartaodeb',
		'promissoria',
		'cliente',
		'endereco',
		'cidade',
		'cpf',
		'convenio',
		'vendedor',
		'sequencia',
		'codempresa'
	];
}
