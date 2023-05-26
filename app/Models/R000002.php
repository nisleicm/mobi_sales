<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class R000002
 * 
 * @property int $codigo
 * @property int $cod_mesa
 * @property string|null $cod_produto
 * @property float|null $qtde
 * @property float|null $unitario
 * @property float|null $total
 * @property string|null $complemento
 * @property int|null $transf_mesa
 * @property int|null $cancelado
 * @property string|null $ativa
 * @property string|null $impresso
 * @property string|null $extra
 * @property float|null $acrescimo
 * @property int $codempresa
 *
 * @package App\Models
 */
class R000002 extends Model
{
	protected $table = 'r000002';
	public $timestamps = false;

	protected $casts = [
		'cod_mesa' => 'int',
		'qtde' => 'float',
		'unitario' => 'float',
		'total' => 'float',
		'transf_mesa' => 'int',
		'cancelado' => 'int',
		'acrescimo' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'cod_mesa',
		'cod_produto',
		'qtde',
		'unitario',
		'total',
		'complemento',
		'transf_mesa',
		'cancelado',
		'ativa',
		'impresso',
		'extra',
		'acrescimo'
	];
}
