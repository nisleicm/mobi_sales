<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Nfce
 * 
 * @property int $numero
 * @property Carbon|null $data
 * @property float|null $total
 * @property string|null $cliente
 * @property string|null $chave
 * @property string|null $xml
 * @property int|null $situacao
 * @property float|null $troco
 * @property string|null $hora
 * @property string|null $contingencia
 * @property string|null $enviadocontingencia
 * @property string|null $motivocontingencia
 * @property string|null $xmlenvio
 * @property string|null $xmlcacnelamento
 * @property string|null $cupom
 * @property string|null $motivocontigencia
 * @property int $serie
 * @property string $ambiente
 * @property int $codempresa
 * @property string|null $xmlcancelamento
 *
 * @package App\Models
 */
class Nfce extends Model
{
	protected $table = 'nfce';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'numero' => 'int',
		'data' => 'datetime',
		'total' => 'float',
		'situacao' => 'int',
		'troco' => 'float',
		'serie' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'data',
		'total',
		'cliente',
		'chave',
		'xml',
		'situacao',
		'troco',
		'hora',
		'contingencia',
		'enviadocontingencia',
		'motivocontingencia',
		'xmlenvio',
		'xmlcacnelamento',
		'cupom',
		'motivocontigencia',
		'serie',
		'ambiente',
		'xmlcancelamento'
	];
}
