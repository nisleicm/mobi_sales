<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000022
 * 
 * @property string $codigo
 * @property string|null $codproduto
 * @property string|null $serial
 * @property float|null $estoque
 * @property string|null $codcliente
 * @property float|null $precocusto
 * @property float|null $precovenda
 * @property Carbon|null $datavenda
 * @property int|null $situacao
 * @property string|null $cliente
 * @property string|null $codnota
 * @property string|null $coditem
 * @property Carbon|null $datacompra
 * @property string|null $numeronota
 * @property string|null $codfornecedor
 * @property string|null $codvenda_item
 * @property int|null $filtro
 * @property string|null $codvenda
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000022 extends Model
{
	protected $table = 'c000022';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'estoque' => 'float',
		'precocusto' => 'float',
		'precovenda' => 'float',
		'datavenda' => 'datetime',
		'situacao' => 'int',
		'datacompra' => 'datetime',
		'filtro' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codproduto',
		'serial',
		'estoque',
		'codcliente',
		'precocusto',
		'precovenda',
		'datavenda',
		'situacao',
		'cliente',
		'codnota',
		'coditem',
		'datacompra',
		'numeronota',
		'codfornecedor',
		'codvenda_item',
		'filtro',
		'codvenda',
		'codempresa'
	];
}
