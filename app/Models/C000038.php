<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000038
 * 
 * @property string $codigo
 * @property string|null $codnota
 * @property string|null $codproduto
 * @property float|null $qtde
 * @property float|null $unitario
 * @property float|null $total
 * @property float|null $recebido
 * @property string|null $codloja
 * @property Carbon|null $datamov
 * @property string|null $idmovloja
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000038 extends Model
{
	protected $table = 'c000038';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'qtde' => 'float',
		'unitario' => 'float',
		'total' => 'float',
		'recebido' => 'float',
		'datamov' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codnota',
		'codproduto',
		'qtde',
		'unitario',
		'total',
		'recebido',
		'codloja',
		'datamov',
		'idmovloja',
		'codempresa'
	];
}
