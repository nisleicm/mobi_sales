<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cota
 * 
 * @property int $codigo
 * @property int $codperfil
 * @property float $inicio_cota
 * @property float $fim_cota
 * @property float|null $comissao_excedente
 * @property int $codempresa
 *
 * @package App\Models
 */
class Cota extends Model
{
	protected $table = 'cotas';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'codperfil' => 'int',
		'inicio_cota' => 'float',
		'fim_cota' => 'float',
		'comissao_excedente' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codperfil',
		'inicio_cota',
		'fim_cota',
		'comissao_excedente',
		'codempresa'
	];
}
