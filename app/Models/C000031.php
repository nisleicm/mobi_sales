<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000031
 * 
 * @property string $codigo
 * @property string|null $numero
 * @property string|null $cfop
 * @property Carbon|null $data
 * @property string|null $codfornecedor
 * @property float|null $valor_produtos
 * @property float|null $total_nota
 * @property float|null $base_calculo
 * @property float|null $valor_icms
 * @property float|null $base_sub
 * @property float|null $icms_sub
 * @property float|null $frete
 * @property float|null $seguro
 * @property float|null $outras_despesas
 * @property float|null $valor_total_ipi
 * @property int|null $itens
 * @property float|null $desconto
 * @property string|null $modelo
 * @property string|null $serie
 * @property float|null $aliquota
 * @property int|null $situacao
 * @property string|null $modelo_nf
 * @property string|null $serie_nf
 * @property float|null $valor_isento_icms
 * @property float|null $aliquota_icms
 * @property string|null $situacao_a
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000031 extends Model
{
	protected $table = 'c000031';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'valor_produtos' => 'float',
		'total_nota' => 'float',
		'base_calculo' => 'float',
		'valor_icms' => 'float',
		'base_sub' => 'float',
		'icms_sub' => 'float',
		'frete' => 'float',
		'seguro' => 'float',
		'outras_despesas' => 'float',
		'valor_total_ipi' => 'float',
		'itens' => 'int',
		'desconto' => 'float',
		'aliquota' => 'float',
		'situacao' => 'int',
		'valor_isento_icms' => 'float',
		'aliquota_icms' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'numero',
		'cfop',
		'data',
		'codfornecedor',
		'valor_produtos',
		'total_nota',
		'base_calculo',
		'valor_icms',
		'base_sub',
		'icms_sub',
		'frete',
		'seguro',
		'outras_despesas',
		'valor_total_ipi',
		'itens',
		'desconto',
		'modelo',
		'serie',
		'aliquota',
		'situacao',
		'modelo_nf',
		'serie_nf',
		'valor_isento_icms',
		'aliquota_icms',
		'situacao_a',
		'codempresa'
	];
}
