<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000047
 * 
 * @property Carbon|null $vencimento
 * @property string|null $documento
 * @property string|null $historico
 * @property float|null $valor
 * @property string|null $c
 * @property string|null $e
 * @property string|null $especie
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000047 extends Model
{
	protected $table = 'c000047';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'vencimento' => 'datetime',
		'valor' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'vencimento',
		'documento',
		'historico',
		'valor',
		'c',
		'e',
		'especie',
		'codempresa'
	];
}
