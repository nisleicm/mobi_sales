<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FechamentoMesa
 * 
 * @property int|null $id
 * @property int|null $mesa
 * @property Carbon|null $data_fechamento
 * @property string|null $hora_fechamento
 * @property string|null $cod_funcionario
 * @property float|null $total
 * @property float|null $valor_couvert
 * @property float|null $valor_comissao
 * @property int $codempresa
 *
 * @package App\Models
 */
class FechamentoMesa extends Model
{
	protected $table = 'fechamento_mesas';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'mesa' => 'int',
		'data_fechamento' => 'datetime',
		'total' => 'float',
		'valor_couvert' => 'float',
		'valor_comissao' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'id',
		'mesa',
		'data_fechamento',
		'hora_fechamento',
		'cod_funcionario',
		'total',
		'valor_couvert',
		'valor_comissao',
		'codempresa'
	];
}
