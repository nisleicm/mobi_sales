<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000082
 * 
 * @property string|null $codigo
 * @property string|null $modelo
 * @property string|null $sigla
 * @property string|null $sintegra
 * @property string|null $tipo_registro
 * @property int|null $sequencianf
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class C000082 extends Model
{
	protected $table = 'c000082';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'sequencianf' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'modelo',
		'sigla',
		'sintegra',
		'tipo_registro',
		'sequencianf',
		'codempresa'
	];
}
