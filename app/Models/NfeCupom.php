<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NfeCupom
 * 
 * @property string|null $codigo
 * @property string|null $codnota
 * @property Carbon|null $data
 * @property string|null $cupom_modelo
 * @property int|null $cupom_ecf
 * @property int|null $cupom_coo
 * @property int $codempresa
 *
 * @package App\Models
 */
class NfeCupom extends Model
{
	protected $table = 'nfe_cupom';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'cupom_ecf' => 'int',
		'cupom_coo' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'codnota',
		'data',
		'cupom_modelo',
		'cupom_ecf',
		'cupom_coo',
		'codempresa'
	];
}
