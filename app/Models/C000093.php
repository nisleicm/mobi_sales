<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000093
 * 
 * @property string $lote
 * @property int|null $situacao
 * @property string|null $codproduto
 * @property string|null $unidade
 * @property Carbon|null $data
 * @property string|null $notafiscal
 * @property float|null $quantidade
 * @property float|null $valor
 * @property string|null $observacao
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000093 extends Model
{
	protected $table = 'c000093';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'situacao' => 'int',
		'data' => 'datetime',
		'quantidade' => 'float',
		'valor' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'situacao',
		'codproduto',
		'unidade',
		'data',
		'notafiscal',
		'quantidade',
		'valor',
		'observacao'
	];
}
