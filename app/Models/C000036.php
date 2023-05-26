<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000036
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
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000036 extends Model
{
	protected $table = 'c000036';
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
		'codempresa'
	];
}
