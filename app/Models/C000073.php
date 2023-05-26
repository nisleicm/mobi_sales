<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000073
 * 
 * @property string|null $numero
 * @property string|null $codproduto
 * @property string|null $produto
 * @property string|null $unidade
 * @property float|null $qtde
 * @property float|null $valor
 * @property float|null $total
 * @property float|null $desconto
 * @property float|null $acrescimo
 * @property string|null $aliquota
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000073 extends Model
{
	protected $table = 'c000073';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'qtde' => 'float',
		'valor' => 'float',
		'total' => 'float',
		'desconto' => 'float',
		'acrescimo' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'numero',
		'codproduto',
		'produto',
		'unidade',
		'qtde',
		'valor',
		'total',
		'desconto',
		'acrescimo',
		'aliquota',
		'codempresa'
	];
}
