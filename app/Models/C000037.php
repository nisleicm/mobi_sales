<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000037
 * 
 * @property string $codigo
 * @property string|null $numero
 * @property string|null $cfop
 * @property Carbon|null $data
 * @property string|null $codfornecedor
 * @property float|null $total_nota
 * @property int|null $itens
 * @property int|null $situacao
 * @property Carbon|null $previsao
 * @property string|null $condpgto
 * @property string|null $obs1
 * @property string|null $obs2
 * @property string|null $obs3
 * @property string|null $obs4
 * @property string|null $codloja
 * @property string|null $observacao
 * @property Carbon|null $datamov
 * @property string|null $idmovloja
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000037 extends Model
{
	protected $table = 'c000037';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'total_nota' => 'float',
		'itens' => 'int',
		'situacao' => 'int',
		'previsao' => 'datetime',
		'datamov' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'numero',
		'cfop',
		'data',
		'codfornecedor',
		'total_nota',
		'itens',
		'situacao',
		'previsao',
		'condpgto',
		'obs1',
		'obs2',
		'obs3',
		'obs4',
		'codloja',
		'observacao',
		'datamov',
		'idmovloja',
		'codempresa'
	];
}
