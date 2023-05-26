<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000064
 * 
 * @property string $codigo
 * @property string|null $descricao
 * @property string|null $codconta
 * @property string|null $codigo_cedente
 * @property string|null $arquivo_logomarca
 * @property string|null $nossonumero_inicio
 * @property int|null $remessa_utiliza
 * @property int|null $retorno_utiliza
 * @property string|null $remessa_local
 * @property string|null $retorno_local
 * @property string|null $instrucoes_1
 * @property string|null $instrucoes_2
 * @property string|null $instrucoes_3
 * @property string|null $demonstrativo_1
 * @property string|null $demonstrativo_2
 * @property string|null $demonstrativo_3
 * @property string|null $demonstrativo_4
 * @property string|null $demonstrativo_5
 * @property string|null $demonstrativo_6
 * @property string|null $demonstrativo_7
 * @property string|null $demonstrativo_8
 * @property int|null $demonstrativo_tipo
 * @property int|null $lin_vencimento
 * @property int|null $col_vencimento
 * @property int|null $lin_datadoc
 * @property int|null $col_datadoc
 * @property int|null $lin_numero
 * @property int|null $col_numero
 * @property int|null $lin_espdoc
 * @property int|null $col_espdoc
 * @property int|null $lin_aceite
 * @property int|null $col_aceite
 * @property int|null $lin_esp
 * @property int|null $col_esp
 * @property int|null $lin_qtde
 * @property int|null $col_qtde
 * @property int|null $lin_valor
 * @property int|null $col_valor
 * @property int|null $lin_valordoc
 * @property int|null $col_valordoc
 * @property int|null $lin_desconto
 * @property int|null $col_desconto
 * @property int|null $lin_outras
 * @property int|null $col_outras
 * @property int|null $lin_mora
 * @property int|null $col_mora
 * @property int|null $lin_outros
 * @property int|null $col_outros
 * @property int|null $lin_cobrado
 * @property int|null $col_cobrado
 * @property int|null $lin_cedente
 * @property int|null $col_cedente
 * @property int|null $lin_cedenteender
 * @property int|null $col_cedenteender
 * @property int|null $col_instrucoes
 * @property int|null $lin_inst1
 * @property int|null $lin_inst2
 * @property int|null $lin_inst3
 * @property int|null $lin_inst4
 * @property int|null $lin_inst5
 * @property int|null $lin_inst6
 * @property int|null $remessa_sequencia
 * @property string|null $remessa_layout
 * @property int|null $entre_linhas
 * @property int|null $acerto_entre_linhas
 * @property string|null $codigo_carteira
 * @property string|null $forma_cadastramento
 * @property string|null $contadig
 * @property string|null $agenciadig
 * @property string|null $convenio
 * @property string|null $cnpj
 * @property string|null $codcontadig
 * @property int|null $layout
 * @property int|null $tipo_boleto
 * @property int|null $tipo_carteira
 * @property int|null $tipo_documento
 * @property string|null $modalidade
 * @property string|null $carteira
 * @property string|null $especiedoc
 * @property string|null $instrucoes_4
 * @property string|null $instrucoes_5
 * @property string|null $instrucoes_6
 * @property string|null $arquivo_configuracao
 * @property string|null $nossonumero_fim
 * @property string|null $nossonumero_proximo
 * @property string|null $variacao_modalidade
 * @property string|null $margem_superior
 * @property string|null $tipo
 * @property string|null $retorno_layout
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000064 extends Model
{
	protected $table = 'c000064';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'remessa_utiliza' => 'int',
		'retorno_utiliza' => 'int',
		'demonstrativo_tipo' => 'int',
		'lin_vencimento' => 'int',
		'col_vencimento' => 'int',
		'lin_datadoc' => 'int',
		'col_datadoc' => 'int',
		'lin_numero' => 'int',
		'col_numero' => 'int',
		'lin_espdoc' => 'int',
		'col_espdoc' => 'int',
		'lin_aceite' => 'int',
		'col_aceite' => 'int',
		'lin_esp' => 'int',
		'col_esp' => 'int',
		'lin_qtde' => 'int',
		'col_qtde' => 'int',
		'lin_valor' => 'int',
		'col_valor' => 'int',
		'lin_valordoc' => 'int',
		'col_valordoc' => 'int',
		'lin_desconto' => 'int',
		'col_desconto' => 'int',
		'lin_outras' => 'int',
		'col_outras' => 'int',
		'lin_mora' => 'int',
		'col_mora' => 'int',
		'lin_outros' => 'int',
		'col_outros' => 'int',
		'lin_cobrado' => 'int',
		'col_cobrado' => 'int',
		'lin_cedente' => 'int',
		'col_cedente' => 'int',
		'lin_cedenteender' => 'int',
		'col_cedenteender' => 'int',
		'col_instrucoes' => 'int',
		'lin_inst1' => 'int',
		'lin_inst2' => 'int',
		'lin_inst3' => 'int',
		'lin_inst4' => 'int',
		'lin_inst5' => 'int',
		'lin_inst6' => 'int',
		'remessa_sequencia' => 'int',
		'entre_linhas' => 'int',
		'acerto_entre_linhas' => 'int',
		'layout' => 'int',
		'tipo_boleto' => 'int',
		'tipo_carteira' => 'int',
		'tipo_documento' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'descricao',
		'codconta',
		'codigo_cedente',
		'arquivo_logomarca',
		'nossonumero_inicio',
		'remessa_utiliza',
		'retorno_utiliza',
		'remessa_local',
		'retorno_local',
		'instrucoes_1',
		'instrucoes_2',
		'instrucoes_3',
		'demonstrativo_1',
		'demonstrativo_2',
		'demonstrativo_3',
		'demonstrativo_4',
		'demonstrativo_5',
		'demonstrativo_6',
		'demonstrativo_7',
		'demonstrativo_8',
		'demonstrativo_tipo',
		'lin_vencimento',
		'col_vencimento',
		'lin_datadoc',
		'col_datadoc',
		'lin_numero',
		'col_numero',
		'lin_espdoc',
		'col_espdoc',
		'lin_aceite',
		'col_aceite',
		'lin_esp',
		'col_esp',
		'lin_qtde',
		'col_qtde',
		'lin_valor',
		'col_valor',
		'lin_valordoc',
		'col_valordoc',
		'lin_desconto',
		'col_desconto',
		'lin_outras',
		'col_outras',
		'lin_mora',
		'col_mora',
		'lin_outros',
		'col_outros',
		'lin_cobrado',
		'col_cobrado',
		'lin_cedente',
		'col_cedente',
		'lin_cedenteender',
		'col_cedenteender',
		'col_instrucoes',
		'lin_inst1',
		'lin_inst2',
		'lin_inst3',
		'lin_inst4',
		'lin_inst5',
		'lin_inst6',
		'remessa_sequencia',
		'remessa_layout',
		'entre_linhas',
		'acerto_entre_linhas',
		'codigo_carteira',
		'forma_cadastramento',
		'contadig',
		'agenciadig',
		'convenio',
		'cnpj',
		'codcontadig',
		'layout',
		'tipo_boleto',
		'tipo_carteira',
		'tipo_documento',
		'modalidade',
		'carteira',
		'especiedoc',
		'instrucoes_4',
		'instrucoes_5',
		'instrucoes_6',
		'arquivo_configuracao',
		'nossonumero_fim',
		'nossonumero_proximo',
		'variacao_modalidade',
		'margem_superior',
		'tipo',
		'retorno_layout',
		'codempresa'
	];
}
