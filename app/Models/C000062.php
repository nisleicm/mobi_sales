<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000062
 * 
 * @property string $codnota
 * @property string|null $codproduto
 * @property float|null $qtde
 * @property float|null $unitario
 * @property float|null $total
 * @property float|null $ipi
 * @property float|null $icms
 * @property string|null $cfop
 * @property string|null $codgrade
 * @property string|null $serial
 * @property float|null $valor_ipi
 * @property string|null $classificacao_fiscal
 * @property string|null $cst
 * @property float|null $valor_icms
 * @property float|null $icms_reduzido
 * @property float|null $base_calculo
 * @property float|null $margem_agregada
 * @property float|null $base_sub
 * @property float|null $icms_sub
 * @property float|null $isento
 * @property string|null $codlancamento
 * @property float|null $desconto
 * @property float|null $subtotal
 * @property float|null $peso_bruto
 * @property float|null $peso_liquido
 * @property int|null $item
 * @property string|null $codigo
 * @property string|null $grade
 * @property float|null $outras
 * @property float|null $pis_aliquota
 * @property float|null $pis_base
 * @property float|null $pis_valor
 * @property float|null $cofins_aliquota
 * @property float|null $cofins_base
 * @property float|null $cofins_valor
 * @property string|null $codbarra
 * @property int|null $altera_item
 * @property string|null $csosn
 * @property string|null $complemento
 * @property string|null $cest
 * @property float|null $valor_fcp_destino
 * @property float|null $valor_difal_destino
 * @property float|null $valor_difal_origem
 * @property string|null $cst_pis
 * @property string|null $cst_cofins
 * @property float|null $valor_frete
 * @property float|null $valor_seguro
 * @property float|null $icmsst_aliquota
 * @property float|null $pipi_devolvido
 * @property float|null $vipi_devolvido
 * @property float|null $vbcfcp
 * @property float|null $pfcp
 * @property float|null $vfcp
 * @property float|null $vbcfcpst
 * @property float|null $pfcpst
 * @property float|null $vfcpst
 * @property float|null $predbcst
 * @property float|null $pdif
 * @property string|null $cprodanp
 * @property float|null $pmixgn
 * @property string|null $codif
 * @property float|null $qtemp
 * @property string|null $ufcons
 * @property float|null $qbcprod
 * @property float|null $valiqprod
 * @property float|null $vcide
 * @property float|null $credsn_aliquota
 * @property float|null $credsn_valor
 * @property string|null $piscofins
 * @property float|null $freteitem
 * @property string|null $xitem
 * @property string|null $xped
 * @property int|null $origem
 * @property float|null $frete
 * @property float|null $seguro
 * @property float|null $outras_despesas
 * @property float|null $pfcpstret
 * @property float|null $vfcpstret
 * @property float|null $pst
 * @property string|null $marca
 * @property float|null $aliquota_sub
 * @property int $codempresa
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
class C000062 extends Model
{
	protected $table = 'c000062';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'qtde' => 'float',
		'unitario' => 'float',
		'total' => 'float',
		'ipi' => 'float',
		'icms' => 'float',
		'valor_ipi' => 'float',
		'valor_icms' => 'float',
		'icms_reduzido' => 'float',
		'base_calculo' => 'float',
		'margem_agregada' => 'float',
		'base_sub' => 'float',
		'icms_sub' => 'float',
		'isento' => 'float',
		'desconto' => 'float',
		'subtotal' => 'float',
		'peso_bruto' => 'float',
		'peso_liquido' => 'float',
		'item' => 'int',
		'outras' => 'float',
		'pis_aliquota' => 'float',
		'pis_base' => 'float',
		'pis_valor' => 'float',
		'cofins_aliquota' => 'float',
		'cofins_base' => 'float',
		'cofins_valor' => 'float',
		'altera_item' => 'int',
		'valor_fcp_destino' => 'float',
		'valor_difal_destino' => 'float',
		'valor_difal_origem' => 'float',
		'valor_frete' => 'float',
		'valor_seguro' => 'float',
		'icmsst_aliquota' => 'float',
		'pipi_devolvido' => 'float',
		'vipi_devolvido' => 'float',
		'vbcfcp' => 'float',
		'pfcp' => 'float',
		'vfcp' => 'float',
		'vbcfcpst' => 'float',
		'pfcpst' => 'float',
		'vfcpst' => 'float',
		'predbcst' => 'float',
		'pdif' => 'float',
		'pmixgn' => 'float',
		'qtemp' => 'float',
		'qbcprod' => 'float',
		'valiqprod' => 'float',
		'vcide' => 'float',
		'credsn_aliquota' => 'float',
		'credsn_valor' => 'float',
		'freteitem' => 'float',
		'origem' => 'int',
		'frete' => 'float',
		'seguro' => 'float',
		'outras_despesas' => 'float',
		'pfcpstret' => 'float',
		'vfcpstret' => 'float',
		'pst' => 'float',
		'aliquota_sub' => 'float',
		'codempresa' => 'int',
		'justdesonera' => 'int',
		'pisst' => 'float',
		'cofinsst' => 'float',
		'vicmsdeso' => 'float',
		'vicmsstdeso' => 'float'
	];

	protected $fillable = [
		'codnota',
		'codproduto',
		'qtde',
		'unitario',
		'total',
		'ipi',
		'icms',
		'cfop',
		'codgrade',
		'serial',
		'valor_ipi',
		'classificacao_fiscal',
		'cst',
		'valor_icms',
		'icms_reduzido',
		'base_calculo',
		'margem_agregada',
		'base_sub',
		'icms_sub',
		'isento',
		'codlancamento',
		'desconto',
		'subtotal',
		'peso_bruto',
		'peso_liquido',
		'item',
		'codigo',
		'grade',
		'outras',
		'pis_aliquota',
		'pis_base',
		'pis_valor',
		'cofins_aliquota',
		'cofins_base',
		'cofins_valor',
		'codbarra',
		'altera_item',
		'csosn',
		'complemento',
		'cest',
		'valor_fcp_destino',
		'valor_difal_destino',
		'valor_difal_origem',
		'cst_pis',
		'cst_cofins',
		'valor_frete',
		'valor_seguro',
		'icmsst_aliquota',
		'pipi_devolvido',
		'vipi_devolvido',
		'vbcfcp',
		'pfcp',
		'vfcp',
		'vbcfcpst',
		'pfcpst',
		'vfcpst',
		'predbcst',
		'pdif',
		'cprodanp',
		'pmixgn',
		'codif',
		'qtemp',
		'ufcons',
		'qbcprod',
		'valiqprod',
		'vcide',
		'credsn_aliquota',
		'credsn_valor',
		'piscofins',
		'freteitem',
		'xitem',
		'xped',
		'origem',
		'frete',
		'seguro',
		'outras_despesas',
		'pfcpstret',
		'vfcpstret',
		'pst',
		'marca',
		'aliquota_sub',
		'codempresa',
		'justdesonera',
		'cean',
		'ceantrib',
		'pisst',
		'cofinsst',
		'vicmsdeso',
		'vicmsstdeso'
	];
}
