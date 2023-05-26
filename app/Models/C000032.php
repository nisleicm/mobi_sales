<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000032
 * 
 * @property string $id
 * @property string|null $codnota
 * @property string|null $codproduto
 * @property float|null $unitario
 * @property float|null $total
 * @property float|null $icms
 * @property float|null $ipi
 * @property string|null $cfop
 * @property Carbon|null $data
 * @property string|null $numeronota
 * @property string|null $codcliente
 * @property float|null $desconto
 * @property float|null $acrescimo
 * @property int|null $movimento
 * @property string|null $codvendedor
 * @property string|null $codgrade
 * @property string|null $serial
 * @property string|null $unidade
 * @property float|null $qtde
 * @property float|null $valor_icms
 * @property float|null $icms_reduzido
 * @property float|null $base_calculo
 * @property float|null $valor_ipi
 * @property int|null $situacao
 * @property string|null $ecf_serie
 * @property string|null $ecf_caixa
 * @property string|null $codaliquota
 * @property string|null $cupom_numero
 * @property string|null $cupom_modelo
 * @property string|null $cupom_item
 * @property float|null $aliquota
 * @property string|null $cst
 * @property string|null $lote_fabricacao
 * @property float|null $movimento_estoque
 * @property int|null $lancado
 * @property Carbon|null $vencimento
 * @property string|null $codbarra
 * @property float|null $margem_desconto
 * @property float|null $credito_icms
 * @property float|null $pis
 * @property float|null $cofins
 * @property string|null $loja
 * @property string|null $codsubgrupo
 * @property string|null $tipo
 * @property string|null $codusuario
 * @property string|null $origem
 * @property string|null $destino
 * @property string|null $produto
 * @property string|null $codfilial
 * @property float|null $comissao
 * @property float|null $valor_comissao
 * @property string|null $motivo_da_movimentacao
 * @property string|null $unidade_adic
 * @property float|null $qtde_unidade_adic
 * @property float|null $icmsst_base
 * @property float|null $icmsst_valor
 * @property string|null $aidf
 * @property string|null $validade
 * @property string|null $csosn
 * @property string|null $nfce
 * @property string|null $classificacao_fiscal
 * @property string|null $gerou_sat
 * @property string|null $xitem
 * @property string|null $xped
 * @property float|null $base_sub
 * @property float|null $icms_sub
 * @property float|null $isentas_icms
 * @property float|null $outras_icms
 * @property int|null $numero_sat
 * @property string|null $codloja
 * @property string|null $devolvido
 * @property string|null $ecf
 * @property float|null $preco_custo
 * @property int|null $idonline
 * @property float|null $custo
 * @property float|null $total_custo
 * @property Carbon|null $datamov
 * @property string|null $idmovloja
 * @property int $codempresa
 * @property string|null $codnf
 * @property float|null $estoque
 * @property int|null $justdesonera
 * @property string|null $cean
 * @property string|null $ceantrib
 * @property float|null $pisst
 * @property float|null $cofinsst
 * @property float|null $vicmsdeso
 * @property float|null $vicmsstdeso
 *
 * @package App\Models
 */
class C000032 extends Model
{
	protected $table = 'c000032';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'unitario' => 'float',
		'total' => 'float',
		'icms' => 'float',
		'ipi' => 'float',
		'data' => 'datetime',
		'desconto' => 'float',
		'acrescimo' => 'float',
		'movimento' => 'int',
		'qtde' => 'float',
		'valor_icms' => 'float',
		'icms_reduzido' => 'float',
		'base_calculo' => 'float',
		'valor_ipi' => 'float',
		'situacao' => 'int',
		'aliquota' => 'float',
		'movimento_estoque' => 'float',
		'lancado' => 'int',
		'vencimento' => 'datetime',
		'margem_desconto' => 'float',
		'credito_icms' => 'float',
		'pis' => 'float',
		'cofins' => 'float',
		'comissao' => 'float',
		'valor_comissao' => 'float',
		'qtde_unidade_adic' => 'float',
		'icmsst_base' => 'float',
		'icmsst_valor' => 'float',
		'base_sub' => 'float',
		'icms_sub' => 'float',
		'isentas_icms' => 'float',
		'outras_icms' => 'float',
		'numero_sat' => 'int',
		'preco_custo' => 'float',
		'idonline' => 'int',
		'custo' => 'float',
		'total_custo' => 'float',
		'datamov' => 'datetime',
		'codempresa' => 'int',
		'estoque' => 'float',
		'justdesonera' => 'int',
		'pisst' => 'float',
		'cofinsst' => 'float',
		'vicmsdeso' => 'float',
		'vicmsstdeso' => 'float'
	];

	protected $fillable = [
		'id',
		'codnota',
		'codproduto',
		'unitario',
		'total',
		'icms',
		'ipi',
		'cfop',
		'data',
		'numeronota',
		'codcliente',
		'desconto',
		'acrescimo',
		'movimento',
		'codvendedor',
		'codgrade',
		'serial',
		'unidade',
		'qtde',
		'valor_icms',
		'icms_reduzido',
		'base_calculo',
		'valor_ipi',
		'situacao',
		'ecf_serie',
		'ecf_caixa',
		'codaliquota',
		'cupom_numero',
		'cupom_modelo',
		'cupom_item',
		'aliquota',
		'cst',
		'lote_fabricacao',
		'movimento_estoque',
		'lancado',
		'vencimento',
		'codbarra',
		'margem_desconto',
		'credito_icms',
		'pis',
		'cofins',
		'loja',
		'codsubgrupo',
		'tipo',
		'codusuario',
		'origem',
		'destino',
		'produto',
		'codfilial',
		'comissao',
		'valor_comissao',
		'motivo_da_movimentacao',
		'unidade_adic',
		'qtde_unidade_adic',
		'icmsst_base',
		'icmsst_valor',
		'aidf',
		'validade',
		'csosn',
		'nfce',
		'classificacao_fiscal',
		'gerou_sat',
		'xitem',
		'xped',
		'base_sub',
		'icms_sub',
		'isentas_icms',
		'outras_icms',
		'numero_sat',
		'codloja',
		'devolvido',
		'ecf',
		'preco_custo',
		'idonline',
		'custo',
		'total_custo',
		'datamov',
		'idmovloja',
		'codempresa',
		'codnf',
		'estoque',
		'justdesonera',
		'cean',
		'ceantrib',
		'pisst',
		'cofinsst',
		'vicmsdeso',
		'vicmsstdeso'
	];
}
