<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000057
 * 
 * @property string|null $codproduto
 * @property string|null $produto
 * @property string|null $unidade
 * @property float|null $qtde
 * @property float|null $unitario
 * @property float|null $desconto
 * @property float|null $acrescimo
 * @property float|null $total
 * @property string|null $codorcamento
 * @property string|null $codbarra
 * @property string|null $ncm
 * @property string|null $lote
 * @property int|null $ind
 * @property string|null $numeracao
 * @property string|null $cst
 * @property string|null $icms
 * @property string|null $cfop
 * @property float|null $aliquota
 * @property string|null $codgrade
 * @property int|null $tipo
 * @property string|null $serial
 * @property string|null $item
 * @property string|null $terminal
 * @property string|null $codsubgrupo
 * @property string|null $piscofins
 * @property string|null $serial_codint
 * @property string|null $grade_codint
 * @property string|null $obs
 * @property string|null $codigo
 * @property string|null $xitem
 * @property string|null $xped
 * @property string|null $codloja
 * @property int $id
 * @property int|null $c000056_id
 * @property int|null $status
 * @property string|null $cod
 * @property int $codempresa
 * @property Carbon|null $updated_at
 * @property Carbon|null $created_at
 * 
 * @property C000056|null $c000056
 *
 * @package App\Models
 */
class C000057 extends Model
{
	protected $table = 'c000057';

	protected $casts = [
		'qtde' => 'float',
		'unitario' => 'float',
		'desconto' => 'float',
		'acrescimo' => 'float',
		'total' => 'float',
		'ind' => 'int',
		'aliquota' => 'float',
		'tipo' => 'int',
		'c000056_id' => 'int',
		'status' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codproduto',
		'produto',
		'unidade',
		'qtde',
		'unitario',
		'desconto',
		'acrescimo',
		'total',
		'codorcamento',
		'codbarra',
		'ncm',
		'lote',
		'ind',
		'numeracao',
		'cst',
		'icms',
		'cfop',
		'aliquota',
		'codgrade',
		'tipo',
		'serial',
		'item',
		'terminal',
		'codsubgrupo',
		'piscofins',
		'serial_codint',
		'grade_codint',
		'obs',
		'codigo',
		'xitem',
		'xped',
		'codloja',
		'c000056_id',
		'status',
		'cod',
		'codempresa'
	];

	public function c000056()
	{
		return $this->belongsTo(C000056::class);
	}
}
