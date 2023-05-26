<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000042
 * 
 * @property string $codigo
 * @property string|null $codcontacorrente
 * @property Carbon|null $data
 * @property string|null $historico
 * @property string|null $codconta
 * @property float|null $valor
 * @property string|null $tipo
 * @property string|null $documento
 * @property int|null $idonline
 * @property int|null $conciliar
 * @property string|null $codloja
 * @property Carbon|null $datamov
 * @property string|null $idmovloja
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000042 extends Model
{
	protected $table = 'c000042';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'valor' => 'float',
		'idonline' => 'int',
		'conciliar' => 'int',
		'datamov' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codcontacorrente',
		'data',
		'historico',
		'codconta',
		'valor',
		'tipo',
		'documento',
		'idonline',
		'conciliar',
		'codloja',
		'datamov',
		'idmovloja',
		'codempresa'
	];
}
