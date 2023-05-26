<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000116
 * 
 * @property string $codigo
 * @property Carbon|null $data
 * @property Carbon|null $cod_funci
 * @property string|null $historico
 * @property float|null $valor
 * @property float|null $valor_pago
 * @property float|null $valor_liquido
 * @property int|null $situacao
 * @property string|null $dc
 * @property string|null $tipo
 * @property string|null $mes_ano
 * @property string|null $codfunci
 * @property string|null $cod_caixa
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000116 extends Model
{
	protected $table = 'c000116';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'cod_funci' => 'datetime',
		'valor' => 'float',
		'valor_pago' => 'float',
		'valor_liquido' => 'float',
		'situacao' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'data',
		'cod_funci',
		'historico',
		'valor',
		'valor_pago',
		'valor_liquido',
		'situacao',
		'dc',
		'tipo',
		'mes_ano',
		'codfunci',
		'cod_caixa'
	];
}
