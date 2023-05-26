<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000051
 * 
 * @property string $codigo
 * @property Carbon|null $data
 * @property string|null $codatendente
 * @property string|null $tipo
 * @property string|null $codcliente
 * @property string|null $solicitante
 * @property string|null $marca
 * @property string|null $modelo
 * @property string|null $serial
 * @property string|null $atendimento
 * @property string|null $defeito
 * @property string|null $obs
 * @property string|null $detectado
 * @property Carbon|null $detectado_data
 * @property string|null $detectado_codtecnico
 * @property string|null $situacao
 * @property Carbon|null $conclusao_data
 * @property Carbon|null $conclusao_entregue
 * @property string|null $retirado_por
 * @property float|null $servico_subtotal
 * @property float|null $servico_desconto
 * @property float|null $servico_total
 * @property float|null $produto_subtotal
 * @property float|null $produto_desconto
 * @property float|null $produto_total
 * @property string|null $codveiculo
 * @property int|null $km_inicial
 * @property int|null $km_final
 * @property float|null $desloc_combustivel
 * @property float|null $desloc_refeicao
 * @property float|null $desloc_hospedagem
 * @property float|null $desloc_total
 * @property string|null $codterceiro
 * @property string|null $terceiro_contato
 * @property float|null $terceiro_valor
 * @property float|null $terceiro_comissao
 * @property float|null $terceiro_total
 * @property string|null $terceiro_obs
 * @property float|null $subtotal
 * @property float|null $desconto
 * @property float|null $acrescimo
 * @property float|null $total
 * @property float|null $meio_dinheiro
 * @property float|null $meio_chequeav
 * @property float|null $meio_chequeap
 * @property float|null $meio_cartaocred
 * @property float|null $meio_cartaodeb
 * @property float|null $meio_crediario
 * @property string|null $codsetor
 * @property int|null $cupomfiscal
 * @property int|null $st
 * @property string|null $chassi
 * @property string|null $cor
 * @property string|null $combustivel
 * @property float|null $combustivel_nivel
 * @property int|null $numero_cupom_fiscal
 * @property string|null $codcaixa
 * @property string|null $detectado_hora
 * @property string|null $hora
 * @property string|null $intervencoes
 * @property string|null $dav
 * @property int|null $dav_impresso
 * @property string|null $dav_atual
 * @property string|null $codfun
 * @property string|null $equipamento_veiculo
 * @property Carbon|null $desloc_datacarregamento
 * @property Carbon|null $desloc_datadescarregamento
 * @property float|null $desloc_porcentagemcomissao
 * @property float|null $desloc_valcomissao
 * @property int|null $id_marca
 * @property float|null $produto_acrescimo
 * @property string|null $osfoto
 * @property int|null $marcar
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000051 extends Model
{
	protected $table = 'c000051';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'detectado_data' => 'datetime',
		'conclusao_data' => 'datetime',
		'conclusao_entregue' => 'datetime',
		'servico_subtotal' => 'float',
		'servico_desconto' => 'float',
		'servico_total' => 'float',
		'produto_subtotal' => 'float',
		'produto_desconto' => 'float',
		'produto_total' => 'float',
		'km_inicial' => 'int',
		'km_final' => 'int',
		'desloc_combustivel' => 'float',
		'desloc_refeicao' => 'float',
		'desloc_hospedagem' => 'float',
		'desloc_total' => 'float',
		'terceiro_valor' => 'float',
		'terceiro_comissao' => 'float',
		'terceiro_total' => 'float',
		'subtotal' => 'float',
		'desconto' => 'float',
		'acrescimo' => 'float',
		'total' => 'float',
		'meio_dinheiro' => 'float',
		'meio_chequeav' => 'float',
		'meio_chequeap' => 'float',
		'meio_cartaocred' => 'float',
		'meio_cartaodeb' => 'float',
		'meio_crediario' => 'float',
		'cupomfiscal' => 'int',
		'st' => 'int',
		'combustivel_nivel' => 'float',
		'numero_cupom_fiscal' => 'int',
		'dav_impresso' => 'int',
		'desloc_datacarregamento' => 'datetime',
		'desloc_datadescarregamento' => 'datetime',
		'desloc_porcentagemcomissao' => 'float',
		'desloc_valcomissao' => 'float',
		'id_marca' => 'int',
		'produto_acrescimo' => 'float',
		'marcar' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'data',
		'codatendente',
		'tipo',
		'codcliente',
		'solicitante',
		'marca',
		'modelo',
		'serial',
		'atendimento',
		'defeito',
		'obs',
		'detectado',
		'detectado_data',
		'detectado_codtecnico',
		'situacao',
		'conclusao_data',
		'conclusao_entregue',
		'retirado_por',
		'servico_subtotal',
		'servico_desconto',
		'servico_total',
		'produto_subtotal',
		'produto_desconto',
		'produto_total',
		'codveiculo',
		'km_inicial',
		'km_final',
		'desloc_combustivel',
		'desloc_refeicao',
		'desloc_hospedagem',
		'desloc_total',
		'codterceiro',
		'terceiro_contato',
		'terceiro_valor',
		'terceiro_comissao',
		'terceiro_total',
		'terceiro_obs',
		'subtotal',
		'desconto',
		'acrescimo',
		'total',
		'meio_dinheiro',
		'meio_chequeav',
		'meio_chequeap',
		'meio_cartaocred',
		'meio_cartaodeb',
		'meio_crediario',
		'codsetor',
		'cupomfiscal',
		'st',
		'chassi',
		'cor',
		'combustivel',
		'combustivel_nivel',
		'numero_cupom_fiscal',
		'codcaixa',
		'detectado_hora',
		'hora',
		'intervencoes',
		'dav',
		'dav_impresso',
		'dav_atual',
		'codfun',
		'equipamento_veiculo',
		'desloc_datacarregamento',
		'desloc_datadescarregamento',
		'desloc_porcentagemcomissao',
		'desloc_valcomissao',
		'id_marca',
		'produto_acrescimo',
		'osfoto',
		'marcar',
		'codempresa'
	];
}
