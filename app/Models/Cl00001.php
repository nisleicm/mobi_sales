<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cl00001
 * 
 * @property string|null $item
 * @property string|null $codproduto
 * @property string|null $produto
 * @property string|null $codbarras
 * @property string|null $serial
 * @property string|null $numeracao
 * @property float|null $qtde
 * @property float|null $unitario
 * @property float|null $total
 * @property float|null $desconto
 * @property float|null $acrescimo
 * @property string|null $codgrade
 * @property int|null $tipo
 * @property float|null $aliquota
 * @property string|null $cst
 * @property string|null $terminal
 * @property string|null $codsubgrupo
 * @property string|null $piscofins
 * @property string|null $serial_codint
 * @property string|null $grade_codint
 * @property float|null $comissao
 * @property string|null $unidade
 * @property string|null $cfop
 * @property string|null $obs
 * @property string|null $unidade_adicional
 * @property float|null $qtde_unidade_adicional
 * @property string|null $xitem
 * @property string|null $xped
 * @property string|null $codlancamento
 * @property int|null $codempresa
 * @property float|null $custo
 * @property float|null $estoque
 *
 * @package App\Models
 */
class Cl00001 extends Model
{
	protected $table = 'cl00001';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'qtde' => 'float',
		'unitario' => 'float',
		'total' => 'float',
		'desconto' => 'float',
		'acrescimo' => 'float',
		'tipo' => 'int',
		'aliquota' => 'float',
		'comissao' => 'float',
		'qtde_unidade_adicional' => 'float',
		'codempresa' => 'int',
		'custo' => 'float',
		'estoque' => 'float'
	];

	protected $fillable = [
		'item',
		'codproduto',
		'produto',
		'codbarras',
		'serial',
		'numeracao',
		'qtde',
		'unitario',
		'total',
		'desconto',
		'acrescimo',
		'codgrade',
		'tipo',
		'aliquota',
		'cst',
		'terminal',
		'codsubgrupo',
		'piscofins',
		'serial_codint',
		'grade_codint',
		'comissao',
		'unidade',
		'cfop',
		'obs',
		'unidade_adicional',
		'qtde_unidade_adicional',
		'xitem',
		'xped',
		'codlancamento',
		'codempresa',
		'custo',
		'estoque'
	];
}
