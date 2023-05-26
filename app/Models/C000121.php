<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000121
 * 
 * @property string $codigo
 * @property string|null $numero
 * @property string|null $nome
 * @property string|null $codfornecedor
 * @property string|null $setor
 * @property string|null $aquisicao_nf
 * @property Carbon|null $aquisicao_data
 * @property float|null $aquisicao_valor
 * @property string|null $baixa_destino
 * @property Carbon|null $baixa_data
 * @property float|null $baixa_valor
 * @property string|null $baixa_nf
 * @property string|null $obs
 * @property string|null $estado_conservacao
 * @property float|null $depreciacao
 * @property float|null $valor_atual
 * @property string|null $situacao
 * @property string|null $grupo
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000121 extends Model
{
	protected $table = 'c000121';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'aquisicao_data' => 'datetime',
		'aquisicao_valor' => 'float',
		'baixa_data' => 'datetime',
		'baixa_valor' => 'float',
		'depreciacao' => 'float',
		'valor_atual' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'numero',
		'nome',
		'codfornecedor',
		'setor',
		'aquisicao_nf',
		'aquisicao_data',
		'aquisicao_valor',
		'baixa_destino',
		'baixa_data',
		'baixa_valor',
		'baixa_nf',
		'obs',
		'estado_conservacao',
		'depreciacao',
		'valor_atual',
		'situacao',
		'grupo'
	];
}
