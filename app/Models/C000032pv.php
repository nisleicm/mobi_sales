<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000032pv
 * 
 * @property string $codigo
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
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class C000032pv extends Model
{
	protected $table = 'c000032pv';
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
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
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
		'codempresa'
	];
}
