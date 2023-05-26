<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000110
 * 
 * @property string $codigo
 * @property Carbon|null $data
 * @property string $lote
 * @property string|null $ordem_producao
 * @property string|null $ano
 * @property string|null $produto
 * @property string|null $unidade_produto
 * @property string|null $codproduto
 * @property string|null $unidade
 * @property float|null $quantidade
 * @property float|null $quantidade_teorica
 * @property float|null $custo
 * @property float|null $precocusto
 * @property string|null $tipo
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000110 extends Model
{
	protected $table = 'c000110';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'quantidade' => 'float',
		'quantidade_teorica' => 'float',
		'custo' => 'float',
		'precocusto' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'data',
		'lote',
		'ordem_producao',
		'ano',
		'produto',
		'unidade_produto',
		'codproduto',
		'unidade',
		'quantidade',
		'quantidade_teorica',
		'custo',
		'precocusto',
		'tipo'
	];
}
