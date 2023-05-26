<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MesasFechada
 * 
 * @property int $id
 * @property Carbon|null $data_abertura
 * @property string|null $hora_abertura
 * @property Carbon|null $data_fechamento
 * @property string|null $hora_fechamento
 * @property string|null $tempo_uso
 * @property string|null $cod_funcionario
 * @property int|null $num_mesa
 * @property float|null $valor_fechamento
 * @property float|null $valor_comissao
 * @property string|null $cliente_autorizou
 * @property int|null $comanda
 * @property int $codempresa
 *
 * @package App\Models
 */
class MesasFechada extends Model
{
	protected $table = 'mesas_fechadas';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'data_abertura' => 'datetime',
		'data_fechamento' => 'datetime',
		'num_mesa' => 'int',
		'valor_fechamento' => 'float',
		'valor_comissao' => 'float',
		'comanda' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'data_abertura',
		'hora_abertura',
		'data_fechamento',
		'hora_fechamento',
		'tempo_uso',
		'cod_funcionario',
		'num_mesa',
		'valor_fechamento',
		'valor_comissao',
		'cliente_autorizou',
		'comanda'
	];
}
