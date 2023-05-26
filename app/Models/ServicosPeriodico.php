<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ServicosPeriodico
 * 
 * @property int|null $id
 * @property string|null $codcliente
 * @property string|null $codservico
 * @property string|null $codtecnico
 * @property string|null $marca
 * @property string|null $modelo
 * @property string|null $serie
 * @property Carbon|null $primeira_manutencao
 * @property Carbon|null $ultima_manutencao
 * @property int|null $periodo
 * @property string|null $status
 * @property int $codempresa
 *
 * @package App\Models
 */
class ServicosPeriodico extends Model
{
	protected $table = 'servicos_periodicos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'primeira_manutencao' => 'datetime',
		'ultima_manutencao' => 'datetime',
		'periodo' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'id',
		'codcliente',
		'codservico',
		'codtecnico',
		'marca',
		'modelo',
		'serie',
		'primeira_manutencao',
		'ultima_manutencao',
		'periodo',
		'status',
		'codempresa'
	];
}
