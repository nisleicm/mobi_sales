<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pedido
 * 
 * @property int $codigo
 * @property int $numero
 * @property Carbon|null $abertura
 * @property Carbon|null $fechamento
 * @property string|null $codfuncionario
 * @property float|null $servico
 * @property float|null $vallet
 * @property float|null $couvert
 * @property float|null $valor_entrega
 * @property int|null $pediu_fechamento
 * @property int|null $pediu_impressao
 * @property int|null $qtde_pessoas
 * @property float|null $valor_desconto
 * @property int|null $tipo_pedido
 * @property int|null $status
 * @property string|null $obs
 * @property string|null $codcliente
 * @property int|null $bloqueado
 * @property int $expediente
 * @property int|null $tipo_fechamento
 * @property string|null $codvenda
 * @property int|null $codcupom
 * @property string|null $endereco_entrega
 * @property float|null $totalpago_itens
 * @property float|null $totalpago_taxas
 * @property float|null $totalpago_mesa
 * @property float|null $valor_acrescimo
 * @property string|null $codentregador
 * @property string|null $fone_contato
 * @property string|null $nome_contato
 * @property string|null $formapgto_entrega
 * @property float|null $troco_para
 * @property float|null $voucher
 * @property Carbon|null $hvoucher
 * @property Carbon|null $dvoucher
 * @property float|null $consumovoucher
 * @property string|null $cpf
 * @property int|null $validade
 * @property Carbon|null $dataresgate
 * @property Carbon|null $horaresgate
 * @property int|null $resgatou
 * @property string|null $cliente
 * @property string|null $carteirinha
 * @property int|null $itensp
 * @property int|null $tipo_credito
 * @property float|null $valor_sresgate
 * @property int $codempresa
 *
 * @package App\Models
 */
class Pedido extends Model
{
	protected $table = 'pedidos';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'numero' => 'int',
		'abertura' => 'datetime',
		'fechamento' => 'datetime',
		'servico' => 'float',
		'vallet' => 'float',
		'couvert' => 'float',
		'valor_entrega' => 'float',
		'pediu_fechamento' => 'int',
		'pediu_impressao' => 'int',
		'qtde_pessoas' => 'int',
		'valor_desconto' => 'float',
		'tipo_pedido' => 'int',
		'status' => 'int',
		'bloqueado' => 'int',
		'expediente' => 'int',
		'tipo_fechamento' => 'int',
		'codcupom' => 'int',
		'totalpago_itens' => 'float',
		'totalpago_taxas' => 'float',
		'totalpago_mesa' => 'float',
		'valor_acrescimo' => 'float',
		'troco_para' => 'float',
		'voucher' => 'float',
		'hvoucher' => 'datetime',
		'dvoucher' => 'datetime',
		'consumovoucher' => 'float',
		'validade' => 'int',
		'dataresgate' => 'datetime',
		'horaresgate' => 'datetime',
		'resgatou' => 'int',
		'itensp' => 'int',
		'tipo_credito' => 'int',
		'valor_sresgate' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'numero',
		'abertura',
		'fechamento',
		'codfuncionario',
		'servico',
		'vallet',
		'couvert',
		'valor_entrega',
		'pediu_fechamento',
		'pediu_impressao',
		'qtde_pessoas',
		'valor_desconto',
		'tipo_pedido',
		'status',
		'obs',
		'codcliente',
		'bloqueado',
		'expediente',
		'tipo_fechamento',
		'codvenda',
		'codcupom',
		'endereco_entrega',
		'totalpago_itens',
		'totalpago_taxas',
		'totalpago_mesa',
		'valor_acrescimo',
		'codentregador',
		'fone_contato',
		'nome_contato',
		'formapgto_entrega',
		'troco_para',
		'voucher',
		'hvoucher',
		'dvoucher',
		'consumovoucher',
		'cpf',
		'validade',
		'dataresgate',
		'horaresgate',
		'resgatou',
		'cliente',
		'carteirinha',
		'itensp',
		'tipo_credito',
		'valor_sresgate',
		'codempresa'
	];
}
