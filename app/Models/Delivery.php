<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Delivery
 * 
 * @property int $id
 * @property int|null $codigo
 * @property string|null $cliente
 * @property string|null $status
 * @property int|null $id_entregador
 * @property string|null $tipo_entrega
 * @property int|null $id_taxa
 * @property Carbon|null $data_emissao
 * @property string|null $hora_emissao
 * @property Carbon|null $data_entrega
 * @property string|null $hora_entrega
 * @property float|null $valor_total
 * @property float|null $valor_taxa_entrega
 * @property float|null $valor_liquido
 * @property string|null $levar_maq_cartao
 * @property string|null $obs
 * @property string|null $recebido
 * @property string|null $impresso
 * @property int $codempresa
 *
 * @package App\Models
 */
class Delivery extends Model
{
	protected $table = 'delivery';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'codigo' => 'int',
		'id_entregador' => 'int',
		'id_taxa' => 'int',
		'data_emissao' => 'datetime',
		'data_entrega' => 'datetime',
		'valor_total' => 'float',
		'valor_taxa_entrega' => 'float',
		'valor_liquido' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'id',
		'codigo',
		'cliente',
		'status',
		'id_entregador',
		'tipo_entrega',
		'id_taxa',
		'data_emissao',
		'hora_emissao',
		'data_entrega',
		'hora_entrega',
		'valor_total',
		'valor_taxa_entrega',
		'valor_liquido',
		'levar_maq_cartao',
		'obs',
		'recebido',
		'impresso',
		'codempresa'
	];
}
