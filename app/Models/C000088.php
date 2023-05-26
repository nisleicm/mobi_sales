<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000088
 * 
 * @property string|null $codigo
 * @property string|null $item
 * @property string|null $codnota
 * @property string|null $codproduto
 * @property string|null $codlancamento
 * @property string|null $un_compra
 * @property string|null $un_fracao
 * @property float|null $fracao
 * @property string|null $cst
 * @property string|null $cfop
 * @property float|null $qtde
 * @property float|null $unitario
 * @property float|null $subtotal
 * @property float|null $desconto
 * @property float|null $total
 * @property float|null $desconto_p
 * @property string|null $icms_retido
 * @property float|null $icms_aliquota
 * @property float|null $icms_reducao
 * @property float|null $icms_base
 * @property float|null $icms_valor
 * @property float|null $icms_valorretido
 * @property float|null $icms_isento
 * @property float|null $icms_naotributado
 * @property float|null $sub_margem
 * @property float|null $sub_base
 * @property float|null $sub_valor
 * @property string|null $ipi_tipo
 * @property float|null $ipi_aliquota
 * @property float|null $ipi_base
 * @property float|null $ipi_valor
 * @property Carbon|null $data
 * @property int|null $tipo
 * @property string|null $notafiscal
 * @property float|null $frete
 * @property float|null $outras
 * @property float|null $seguro
 * @property string|null $classificacao_fiscal
 * @property float|null $sub_produtos
 * @property string|null $codfornecedor
 * @property float|null $item_especial_valor
 * @property float|null $icms_outras
 * @property int|null $altera_item
 * @property float|null $credito_icms
 * @property float|null $credito_icms_base
 * @property float|null $pis_base
 * @property float|null $pis
 * @property float|null $cofins_base
 * @property float|null $cofins
 * @property string|null $lote_fabricacao
 * @property Carbon|null $lote_validade
 * @property Carbon|null $lote_fabricacao_data
 * @property string|null $codbarra
 * @property string|null $produto
 * @property float|null $pmargem
 * @property float|null $precovenda
 * @property float|null $precocusto
 * @property int|null $lancaragrade
 * @property string|null $codigo_grade
 * @property string|null $numeracao_grade
 * @property string|null $cor_grade
 * @property string|null $cest
 * @property string|null $tipofator
 * @property string|null $csosn
 * @property string|null $cfop_cad
 * @property float|null $fator
 * @property float|null $vbcstret
 * @property float|null $pst
 * @property float|null $vicmsstret
 * @property float|null $predbcefet
 * @property float|null $vbcefet
 * @property float|null $picmsefet
 * @property float|null $vicmsefet
 * @property float|null $qtdvendido
 * @property int $codempresa
 * @property string|null $cean
 * @property string|null $ceantrib
 * @property float|null $pisst
 * @property float|null $cofinsst
 * @property float|null $vicmsdeso
 * @property float|null $vicmsstdeso
 *
 * @package App\Models
 */
class C000088 extends Model
{
	protected $table = 'c000088';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'fracao' => 'float',
		'qtde' => 'float',
		'unitario' => 'float',
		'subtotal' => 'float',
		'desconto' => 'float',
		'total' => 'float',
		'desconto_p' => 'float',
		'icms_aliquota' => 'float',
		'icms_reducao' => 'float',
		'icms_base' => 'float',
		'icms_valor' => 'float',
		'icms_valorretido' => 'float',
		'icms_isento' => 'float',
		'icms_naotributado' => 'float',
		'sub_margem' => 'float',
		'sub_base' => 'float',
		'sub_valor' => 'float',
		'ipi_aliquota' => 'float',
		'ipi_base' => 'float',
		'ipi_valor' => 'float',
		'data' => 'datetime',
		'tipo' => 'int',
		'frete' => 'float',
		'outras' => 'float',
		'seguro' => 'float',
		'sub_produtos' => 'float',
		'item_especial_valor' => 'float',
		'icms_outras' => 'float',
		'altera_item' => 'int',
		'credito_icms' => 'float',
		'credito_icms_base' => 'float',
		'pis_base' => 'float',
		'pis' => 'float',
		'cofins_base' => 'float',
		'cofins' => 'float',
		'lote_validade' => 'datetime',
		'lote_fabricacao_data' => 'datetime',
		'pmargem' => 'float',
		'precovenda' => 'float',
		'precocusto' => 'float',
		'lancaragrade' => 'int',
		'fator' => 'float',
		'vbcstret' => 'float',
		'pst' => 'float',
		'vicmsstret' => 'float',
		'predbcefet' => 'float',
		'vbcefet' => 'float',
		'picmsefet' => 'float',
		'vicmsefet' => 'float',
		'qtdvendido' => 'float',
		'codempresa' => 'int',
		'pisst' => 'float',
		'cofinsst' => 'float',
		'vicmsdeso' => 'float',
		'vicmsstdeso' => 'float'
	];

	protected $fillable = [
		'codigo',
		'item',
		'codnota',
		'codproduto',
		'codlancamento',
		'un_compra',
		'un_fracao',
		'fracao',
		'cst',
		'cfop',
		'qtde',
		'unitario',
		'subtotal',
		'desconto',
		'total',
		'desconto_p',
		'icms_retido',
		'icms_aliquota',
		'icms_reducao',
		'icms_base',
		'icms_valor',
		'icms_valorretido',
		'icms_isento',
		'icms_naotributado',
		'sub_margem',
		'sub_base',
		'sub_valor',
		'ipi_tipo',
		'ipi_aliquota',
		'ipi_base',
		'ipi_valor',
		'data',
		'tipo',
		'notafiscal',
		'frete',
		'outras',
		'seguro',
		'classificacao_fiscal',
		'sub_produtos',
		'codfornecedor',
		'item_especial_valor',
		'icms_outras',
		'altera_item',
		'credito_icms',
		'credito_icms_base',
		'pis_base',
		'pis',
		'cofins_base',
		'cofins',
		'lote_fabricacao',
		'lote_validade',
		'lote_fabricacao_data',
		'codbarra',
		'produto',
		'pmargem',
		'precovenda',
		'precocusto',
		'lancaragrade',
		'codigo_grade',
		'numeracao_grade',
		'cor_grade',
		'cest',
		'tipofator',
		'csosn',
		'cfop_cad',
		'fator',
		'vbcstret',
		'pst',
		'vicmsstret',
		'predbcefet',
		'vbcefet',
		'picmsefet',
		'vicmsefet',
		'qtdvendido',
		'codempresa',
		'cean',
		'ceantrib',
		'pisst',
		'cofinsst',
		'vicmsdeso',
		'vicmsstdeso'
	];
}
