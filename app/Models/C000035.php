<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000035
 * 
 * @property string $codigo
 * @property string|null $conta
 * @property int|null $tipo
 * @property float|null $entrada
 * @property float|null $saida
 * @property float|null $saldo
 * @property int|null $filtro
 * @property string|null $classificacao
 * @property string|null $codgrupo
 * @property int|null $nivel
 * @property Carbon|null $datamov
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class C000035 extends Model
{
	protected $table = 'c000035';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tipo' => 'int',
		'entrada' => 'float',
		'saida' => 'float',
		'saldo' => 'float',
		'filtro' => 'int',
		'nivel' => 'int',
		'datamov' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'conta',
		'tipo',
		'entrada',
		'saida',
		'saldo',
		'filtro',
		'classificacao',
		'codgrupo',
		'nivel',
		'datamov',
		'codempresa'
	];
}
