<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000098
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
 * @property string|null $codcliente
 * @property string|null $codigo
 * @property Carbon|null $data
 * @property string|null $codvendedor
 * @property string|null $id
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000098 extends Model
{
	protected $table = 'c000098';
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
		'data' => 'datetime',
		'codempresa' => 'int'
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
		'codcliente',
		'codigo',
		'data',
		'codvendedor',
		'id',
		'codempresa'
	];
}
