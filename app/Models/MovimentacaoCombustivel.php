<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MovimentacaoCombustivel
 * 
 * @property string $codigo
 * @property string|null $codnota
 * @property int $tan_num_fis
 * @property int|null $bom_num_fis
 * @property string|null $bic_num_log
 * @property float|null $enc_abt
 * @property float|null $enc_fct
 * @property string|null $codcliente
 * @property string|null $codvendedor
 * @property Carbon|null $data
 * @property string $codproduto
 * @property float $unitario
 * @property string|null $unidade
 * @property float $qtde
 * @property float $total
 * @property float|null $icms_aliquota
 * @property float|null $icms_base
 * @property float|null $icms_valor
 * @property float|null $credito_icms
 * @property float|null $ipi_aliquota
 * @property float|null $ipi_base
 * @property float|null $ipi_valor
 * @property float|null $pis_aliquota
 * @property float|null $pis_base
 * @property float|null $pis_valor
 * @property float|null $cofins_aliquota
 * @property float|null $cofins_base
 * @property float|null $cofins_valor
 * @property string|null $cfop
 * @property string|null $numeronota
 * @property float|null $desconto
 * @property float|null $acrescimo
 * @property int|null $movimento
 * @property float|null $base_calculo
 * @property int|null $situacao
 * @property string|null $cupom_numero
 * @property string|null $modelo
 * @property string|null $item
 * @property string|null $cst
 * @property float $movimento_estoque
 * @property string|null $codusuario
 * @property int|null $lancado
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class MovimentacaoCombustivel extends Model
{
	protected $table = 'movimentacao_combustivel';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tan_num_fis' => 'int',
		'bom_num_fis' => 'int',
		'enc_abt' => 'float',
		'enc_fct' => 'float',
		'data' => 'datetime',
		'unitario' => 'float',
		'qtde' => 'float',
		'total' => 'float',
		'icms_aliquota' => 'float',
		'icms_base' => 'float',
		'icms_valor' => 'float',
		'credito_icms' => 'float',
		'ipi_aliquota' => 'float',
		'ipi_base' => 'float',
		'ipi_valor' => 'float',
		'pis_aliquota' => 'float',
		'pis_base' => 'float',
		'pis_valor' => 'float',
		'cofins_aliquota' => 'float',
		'cofins_base' => 'float',
		'cofins_valor' => 'float',
		'desconto' => 'float',
		'acrescimo' => 'float',
		'movimento' => 'int',
		'base_calculo' => 'float',
		'situacao' => 'int',
		'movimento_estoque' => 'float',
		'lancado' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'codnota',
		'tan_num_fis',
		'bom_num_fis',
		'bic_num_log',
		'enc_abt',
		'enc_fct',
		'codcliente',
		'codvendedor',
		'data',
		'codproduto',
		'unitario',
		'unidade',
		'qtde',
		'total',
		'icms_aliquota',
		'icms_base',
		'icms_valor',
		'credito_icms',
		'ipi_aliquota',
		'ipi_base',
		'ipi_valor',
		'pis_aliquota',
		'pis_base',
		'pis_valor',
		'cofins_aliquota',
		'cofins_base',
		'cofins_valor',
		'cfop',
		'numeronota',
		'desconto',
		'acrescimo',
		'movimento',
		'base_calculo',
		'situacao',
		'cupom_numero',
		'modelo',
		'item',
		'cst',
		'movimento_estoque',
		'codusuario',
		'lancado',
		'codempresa'
	];
}
