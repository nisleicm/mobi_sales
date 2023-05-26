<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000048
 * 
 * @property string $id
 * @property string|null $codcaixa
 * @property string|null $codvendedor
 * @property Carbon|null $data
 * @property string|null $codcliente
 * @property string|null $obs
 * @property float|null $meio_dinheiro
 * @property float|null $meio_chequeav
 * @property float|null $meio_chequeap
 * @property float|null $meio_cartaocred
 * @property float|null $meio_cartaodeb
 * @property float|null $meio_crediario
 * @property float|null $subtotal
 * @property float|null $desconto
 * @property float|null $acrescimo
 * @property float|null $total
 * @property int|null $cupom_fiscal
 * @property string|null $numero_cupom_fiscal
 * @property string|null $retirado
 * @property float|null $meio_convenio
 * @property float|null $p5
 * @property float|null $p3
 * @property float|null $meio_financeira
 * @property string|null $cod_financeira
 * @property string|null $cod_financeira_lancto
 * @property string|null $cod_financeira_lacto
 * @property string|null $codconvenio
 * @property int|null $situacao
 * @property string|null $codtransportador
 * @property string|null $codveiculo
 * @property float|null $frete_valor
 * @property string|null $frete_obs
 * @property int|null $frete_lancar
 * @property string|null $ecf_serial
 * @property string|null $codnfsaida
 * @property int $atacado_varejo
 * @property string|null $nrvenda
 * @property int|null $filtro
 * @property Carbon|null $horario
 * @property int|null $tipo
 * @property string|null $chave
 * @property string|null $status
 * @property int|null $tipo_emissao
 * @property string|null $protocolo
 * @property string|null $numero_terminal
 * @property string|null $dir_xml
 * @property float|null $valor_troco
 * @property float|null $outros_valores
 * @property int|null $vias
 * @property string|null $codfilial
 * @property string|null $codlocal
 * @property string|null $chave_cancelado
 * @property string|null $contingencia
 * @property string|null $gerado_nfce
 * @property string|null $gerou_sat
 * @property string|null $numero_cupom_fiscal_cancel
 * @property string|null $xml_cfe
 * @property string|null $xml_cfe_cancelado
 * @property Carbon|null $hora
 * @property int|null $numero_sat
 * @property float|null $total_pago
 * @property float|null $troco
 * @property float|null $entrada
 * @property string|null $fiscal
 * @property int|null $itens
 * @property string|null $codloja
 * @property string|null $ecf
 * @property string|null $obs1
 * @property string|null $obs2
 * @property string|null $obs3
 * @property string|null $obs4
 * @property int|null $davconvertido
 * @property float|null $meio_pix
 * @property Carbon|null $datamov
 * @property string|null $idmovloja
 * @property int $codempresa
 * @property string|null $xmlemitido
 * @property string|null $xmlcancelado
 *
 * @package App\Models
 */
class C000048 extends Model
{
	protected $table = 'c000048';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'meio_dinheiro' => 'float',
		'meio_chequeav' => 'float',
		'meio_chequeap' => 'float',
		'meio_cartaocred' => 'float',
		'meio_cartaodeb' => 'float',
		'meio_crediario' => 'float',
		'subtotal' => 'float',
		'desconto' => 'float',
		'acrescimo' => 'float',
		'total' => 'float',
		'cupom_fiscal' => 'int',
		'meio_convenio' => 'float',
		'p5' => 'float',
		'p3' => 'float',
		'meio_financeira' => 'float',
		'situacao' => 'int',
		'frete_valor' => 'float',
		'frete_lancar' => 'int',
		'atacado_varejo' => 'int',
		'filtro' => 'int',
		'horario' => 'datetime',
		'tipo' => 'int',
		'tipo_emissao' => 'int',
		'valor_troco' => 'float',
		'outros_valores' => 'float',
		'vias' => 'int',
		'hora' => 'datetime',
		'numero_sat' => 'int',
		'total_pago' => 'float',
		'troco' => 'float',
		'entrada' => 'float',
		'itens' => 'int',
		'davconvertido' => 'int',
		'meio_pix' => 'float',
		'datamov' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'id',
		'codcaixa',
		'codvendedor',
		'data',
		'codcliente',
		'obs',
		'meio_dinheiro',
		'meio_chequeav',
		'meio_chequeap',
		'meio_cartaocred',
		'meio_cartaodeb',
		'meio_crediario',
		'subtotal',
		'desconto',
		'acrescimo',
		'total',
		'cupom_fiscal',
		'numero_cupom_fiscal',
		'retirado',
		'meio_convenio',
		'p5',
		'p3',
		'meio_financeira',
		'cod_financeira',
		'cod_financeira_lancto',
		'cod_financeira_lacto',
		'codconvenio',
		'situacao',
		'codtransportador',
		'codveiculo',
		'frete_valor',
		'frete_obs',
		'frete_lancar',
		'ecf_serial',
		'codnfsaida',
		'atacado_varejo',
		'nrvenda',
		'filtro',
		'horario',
		'tipo',
		'chave',
		'status',
		'tipo_emissao',
		'protocolo',
		'numero_terminal',
		'dir_xml',
		'valor_troco',
		'outros_valores',
		'vias',
		'codfilial',
		'codlocal',
		'chave_cancelado',
		'contingencia',
		'gerado_nfce',
		'gerou_sat',
		'numero_cupom_fiscal_cancel',
		'xml_cfe',
		'xml_cfe_cancelado',
		'hora',
		'numero_sat',
		'total_pago',
		'troco',
		'entrada',
		'fiscal',
		'itens',
		'codloja',
		'ecf',
		'obs1',
		'obs2',
		'obs3',
		'obs4',
		'davconvertido',
		'meio_pix',
		'datamov',
		'idmovloja',
		'codempresa',
		'xmlemitido',
		'xmlcancelado'
	];
}
