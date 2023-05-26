<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000079
 * 
 * @property string $codigo
 * @property string|null $produto
 * @property string|null $unidade_produto
 * @property string|null $codproduto
 * @property string|null $unidade_materiaprima
 * @property float|null $quantidade
 * @property float|null $custo
 * @property float|null $precocusto
 * @property string|null $tipo
 * @property string|null $cfop
 * @property string|null $cst
 * @property float|null $aliquota
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000079 extends Model
{
	protected $table = 'c000079';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'quantidade' => 'float',
		'custo' => 'float',
		'precocusto' => 'float',
		'aliquota' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'produto',
		'unidade_produto',
		'codproduto',
		'unidade_materiaprima',
		'quantidade',
		'custo',
		'precocusto',
		'tipo',
		'cfop',
		'cst',
		'aliquota'
	];
}
