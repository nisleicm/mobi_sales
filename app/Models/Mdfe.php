<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Mdfe
 * 
 * @property string|null $id_chave
 * @property string|null $nome_arquivo
 * @property string|null $protocolo
 * @property int|null $tipo_ambiente
 * @property string|null $veraplicacao
 * @property Carbon|null $data_recebimento
 * @property string|null $recibo
 * @property int|null $status
 * @property string|null $msg
 * @property string|null $motivo
 * @property string|null $cidade_origem
 * @property string|null $cidade_destino
 * @property float|null $valor_total_carga
 * @property int|null $evento
 * @property string|null $codfilial
 * @property int $codempresa
 *
 * @package App\Models
 */
class Mdfe extends Model
{
	protected $table = 'mdfe';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tipo_ambiente' => 'int',
		'data_recebimento' => 'datetime',
		'status' => 'int',
		'valor_total_carga' => 'float',
		'evento' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'id_chave',
		'nome_arquivo',
		'protocolo',
		'tipo_ambiente',
		'veraplicacao',
		'data_recebimento',
		'recibo',
		'status',
		'msg',
		'motivo',
		'cidade_origem',
		'cidade_destino',
		'valor_total_carga',
		'evento',
		'codfilial',
		'codempresa'
	];
}
