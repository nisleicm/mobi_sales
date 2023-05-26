<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Valorescomissao
 * 
 * @property int $codigo
 * @property int $codcota
 * @property string $codpgto
 * @property int $diasemana
 * @property int $tipo
 * @property float $porcentagem
 * @property string|null $codloja
 * @property int $codempresa
 *
 * @package App\Models
 */
class Valorescomissao extends Model
{
	protected $table = 'valorescomissao';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'codcota' => 'int',
		'diasemana' => 'int',
		'tipo' => 'int',
		'porcentagem' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codcota',
		'codpgto',
		'diasemana',
		'tipo',
		'porcentagem',
		'codloja',
		'codempresa'
	];
}
