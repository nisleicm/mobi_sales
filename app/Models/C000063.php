<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000063
 * 
 * @property string $codigo
 * @property string|null $codcliente
 * @property string|null $veiculo
 * @property string|null $placa
 * @property string|null $uf
 * @property string|null $ano
 * @property string|null $combustivel
 * @property string|null $renavam
 * @property Carbon|null $data
 * @property string|null $obs1
 * @property string|null $obs2
 * @property string|null $obs3
 * @property string|null $cor
 * @property string|null $chassi
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000063 extends Model
{
	protected $table = 'c000063';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codcliente',
		'veiculo',
		'placa',
		'uf',
		'ano',
		'combustivel',
		'renavam',
		'data',
		'obs1',
		'obs2',
		'obs3',
		'cor',
		'chassi',
		'codempresa'
	];
}
