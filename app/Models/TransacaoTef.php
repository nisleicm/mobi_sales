<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TransacaoTef
 * 
 * @property int $codigo
 * @property float|null $valor
 * @property int|null $operacao
 * @property int|null $tipo_cartao
 * @property int|null $tipo_financiamento
 * @property string|null $codvenda
 * @property string|null $nsu
 * @property string|null $codigo_autorizacao
 * @property Carbon|null $data_hora
 * @property string|null $nsu_cancelamento
 * @property int $codempresa
 *
 * @package App\Models
 */
class TransacaoTef extends Model
{
	protected $table = 'transacao_tef';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'valor' => 'float',
		'operacao' => 'int',
		'tipo_cartao' => 'int',
		'tipo_financiamento' => 'int',
		'data_hora' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'valor',
		'operacao',
		'tipo_cartao',
		'tipo_financiamento',
		'codvenda',
		'nsu',
		'codigo_autorizacao',
		'data_hora',
		'nsu_cancelamento',
		'codempresa'
	];
}
