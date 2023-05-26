<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000086
 * 
 * @property string $codigo
 * @property int|null $turbo
 * @property string|null $tipo
 * @property int|null $codigo_empresa
 * @property string|null $cfop
 * @property string|null $notafiscal
 * @property string|null $serie
 * @property string|null $subserie
 * @property string|null $especie
 * @property string|null $sintegra
 * @property string|null $modelo_nf
 * @property string|null $s_trib
 * @property int|null $codigo_cliente
 * @property string|null $cpf_cliente
 * @property string|null $cnpj_cliente
 * @property string|null $ie_cliente
 * @property string|null $uf_ie_cliente
 * @property string|null $tipo_venda
 * @property string|null $tipo_frete
 * @property Carbon|null $data
 * @property Carbon|null $data_escrituracao
 * @property int|null $codigo_contabil
 * @property string|null $desdobramento
 * @property float|null $valor_contabil
 * @property float|null $valor_mercadorias
 * @property float|null $aliquota_icms
 * @property string|null $condpgto
 * @property string|null $condicao_pagamento
 * @property int|null $codempresa
 * @property string|null $obs1
 * @property string|null $obs2
 * @property string|null $codlancamento
 * @property float|null $base_icms
 * @property float|null $valor_icms_creditado
 * @property float|null $valor_icms_isentas
 * @property float|null $valor_icms_outras
 * @property float|null $aliquota_ipi
 * @property float|null $base_ipi
 * @property float|null $valor_ipi_creditado
 * @property float|null $valor_ipi_creditado50
 * @property float|null $valor_ipi_isentas
 * @property float|null $valor_ipi_outras
 * @property float|null $valor_ipi_nao_creditado
 * @property float|null $base_substituicao
 * @property float|null $valor_substituicao
 * @property float|null $valor_frete
 * @property float|null $valor_seguro
 * @property float|null $valor_despesas
 * @property float|null $aliquota_iss
 * @property float|null $valor_iss
 * @property string|null $obs3
 * @property int|null $contabil
 * @property float|null $valor_icms
 * @property int|null $codigo_minicipio
 * @property string|null $cnpj
 * @property string|null $insc_estadual
 * @property string|null $uf
 * @property string|null $codigo_pisconfins
 * @property string|null $nota_cancelada
 * @property string|null $observacao
 * @property string|null $transporte_nome
 * @property string|null $transporte_placa
 * @property string|null $transporte_uf
 * @property string|null $transporte_cnpjcpf
 * @property string|null $transporte_endereco
 * @property string|null $transporte_cidade
 * @property string|null $transporte_municipio_uf
 * @property string|null $transporte_ie
 * @property float|null $transporte_quantidade
 * @property string|null $transporte_marca
 * @property string|null $transporte_especie
 * @property string|null $transporte_numero
 * @property float|null $transporte_peso_bruto
 * @property float|null $transporte_peso_liquido
 * @property int|null $baseicms_produtos
 *
 * @package App\Models
 */
class C000086 extends Model
{
	protected $table = 'c000086';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'turbo' => 'int',
		'codigo_empresa' => 'int',
		'codigo_cliente' => 'int',
		'data' => 'datetime',
		'data_escrituracao' => 'datetime',
		'codigo_contabil' => 'int',
		'valor_contabil' => 'float',
		'valor_mercadorias' => 'float',
		'aliquota_icms' => 'float',
		'codempresa' => 'int',
		'base_icms' => 'float',
		'valor_icms_creditado' => 'float',
		'valor_icms_isentas' => 'float',
		'valor_icms_outras' => 'float',
		'aliquota_ipi' => 'float',
		'base_ipi' => 'float',
		'valor_ipi_creditado' => 'float',
		'valor_ipi_creditado50' => 'float',
		'valor_ipi_isentas' => 'float',
		'valor_ipi_outras' => 'float',
		'valor_ipi_nao_creditado' => 'float',
		'base_substituicao' => 'float',
		'valor_substituicao' => 'float',
		'valor_frete' => 'float',
		'valor_seguro' => 'float',
		'valor_despesas' => 'float',
		'aliquota_iss' => 'float',
		'valor_iss' => 'float',
		'contabil' => 'int',
		'valor_icms' => 'float',
		'codigo_minicipio' => 'int',
		'transporte_quantidade' => 'float',
		'transporte_peso_bruto' => 'float',
		'transporte_peso_liquido' => 'float',
		'baseicms_produtos' => 'int'
	];

	protected $fillable = [
		'codigo',
		'turbo',
		'tipo',
		'codigo_empresa',
		'cfop',
		'notafiscal',
		'serie',
		'subserie',
		'especie',
		'sintegra',
		'modelo_nf',
		's_trib',
		'codigo_cliente',
		'cpf_cliente',
		'cnpj_cliente',
		'ie_cliente',
		'uf_ie_cliente',
		'tipo_venda',
		'tipo_frete',
		'data',
		'data_escrituracao',
		'codigo_contabil',
		'desdobramento',
		'valor_contabil',
		'valor_mercadorias',
		'aliquota_icms',
		'condpgto',
		'condicao_pagamento',
		'codempresa',
		'obs1',
		'obs2',
		'codlancamento',
		'base_icms',
		'valor_icms_creditado',
		'valor_icms_isentas',
		'valor_icms_outras',
		'aliquota_ipi',
		'base_ipi',
		'valor_ipi_creditado',
		'valor_ipi_creditado50',
		'valor_ipi_isentas',
		'valor_ipi_outras',
		'valor_ipi_nao_creditado',
		'base_substituicao',
		'valor_substituicao',
		'valor_frete',
		'valor_seguro',
		'valor_despesas',
		'aliquota_iss',
		'valor_iss',
		'obs3',
		'contabil',
		'valor_icms',
		'codigo_minicipio',
		'cnpj',
		'insc_estadual',
		'uf',
		'codigo_pisconfins',
		'nota_cancelada',
		'observacao',
		'transporte_nome',
		'transporte_placa',
		'transporte_uf',
		'transporte_cnpjcpf',
		'transporte_endereco',
		'transporte_cidade',
		'transporte_municipio_uf',
		'transporte_ie',
		'transporte_quantidade',
		'transporte_marca',
		'transporte_especie',
		'transporte_numero',
		'transporte_peso_bruto',
		'transporte_peso_liquido',
		'baseicms_produtos'
	];
}
