<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FarmaciaInsumo
 * 
 * @property string $dcb
 * @property string|null $insumo
 * @property string|null $lista
 * @property float|null $fatorcorrecao
 * @property string|null $adendo
 * @property string|null $codigo
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class FarmaciaInsumo extends Model
{
	protected $table = 'farmacia_insumos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'fatorcorrecao' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'dcb',
		'insumo',
		'lista',
		'fatorcorrecao',
		'adendo',
		'codigo',
		'codempresa'
	];
}
