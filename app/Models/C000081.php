<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000081
 * 
 * @property string $codigo
 * @property string $equipamento
 * @property string|null $serie_empresa
 * @property string|null $serie_equipamento
 * @property float|null $aliquota_iss
 * @property string|null $tipo_ecf
 * @property Carbon|null $data_inicio
 * @property string|null $bd_ecf
 * @property int|null $numero_caixa
 * @property int $sat
 * @property int|null $numeracao_sequencial
 * @property int|null $inicializacao_automatica
 * @property int|null $verifica_contingencia
 * @property string|null $terminal
 * @property string|null $status
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000081 extends Model
{
	protected $table = 'c000081';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'aliquota_iss' => 'float',
		'data_inicio' => 'datetime',
		'numero_caixa' => 'int',
		'sat' => 'int',
		'numeracao_sequencial' => 'int',
		'inicializacao_automatica' => 'int',
		'verifica_contingencia' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'equipamento',
		'serie_empresa',
		'serie_equipamento',
		'aliquota_iss',
		'tipo_ecf',
		'data_inicio',
		'bd_ecf',
		'numero_caixa',
		'sat',
		'numeracao_sequencial',
		'inicializacao_automatica',
		'verifica_contingencia',
		'terminal',
		'status',
		'codempresa'
	];
}
