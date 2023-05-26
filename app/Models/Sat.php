<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sat
 * 
 * @property int $id
 * @property Carbon|null $data
 * @property string|null $hora
 * @property int|null $numero
 * @property string|null $codcliente
 * @property int|null $ambiente
 * @property string|null $cancelado
 * @property string|null $chave
 * @property string|null $alterado
 * @property string|null $xml_envio
 * @property string|null $xml_cancelamento
 * @property string|null $cupom
 * @property float|null $total
 * @property int $codempresa
 *
 * @package App\Models
 */
class Sat extends Model
{
	protected $table = 'sat';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'data' => 'datetime',
		'numero' => 'int',
		'ambiente' => 'int',
		'total' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'data',
		'hora',
		'numero',
		'codcliente',
		'ambiente',
		'cancelado',
		'chave',
		'alterado',
		'xml_envio',
		'xml_cancelamento',
		'cupom',
		'total'
	];
}
