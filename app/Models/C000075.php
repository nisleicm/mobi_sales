<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000075
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
 * @property string|null $serial_codint
 * @property string|null $cod_barras
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000075 extends Model
{
	protected $table = 'c000075';
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
		'codempresa' => 'int'
	];

	protected $fillable = [
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
		'serial_codint',
		'cod_barras'
	];
}
