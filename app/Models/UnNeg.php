<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UnNeg
 * 
 * @property int|null $id
 * @property string|null $codloja
 * @property string|null $unidade
 * @property string|null $codcliente
 * @property string|null $end
 * @property string|null $numero
 * @property string|null $bairro
 * @property string|null $cidade
 * @property string|null $uf
 * @property Carbon|null $dt_sinc_down
 * @property Carbon|null $dt_sinc_up
 * @property int $codigo
 *
 * @package App\Models
 */
class UnNeg extends Model
{
	protected $table = 'un_neg';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'dt_sinc_down' => 'datetime',
		'dt_sinc_up' => 'datetime',
		'codigo' => 'int'
	];

	protected $fillable = [
		'id',
		'codloja',
		'unidade',
		'codcliente',
		'end',
		'numero',
		'bairro',
		'cidade',
		'uf',
		'dt_sinc_down',
		'dt_sinc_up',
		'codigo'
	];
}
