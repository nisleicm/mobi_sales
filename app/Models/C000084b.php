<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000084b
 * 
 * @property string|null $codigo
 * @property string|null $codclasse
 * @property float|null $aliquota_cofins
 * @property Carbon|null $validade_cofins
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class C000084b extends Model
{
	protected $table = 'c000084b';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'aliquota_cofins' => 'float',
		'validade_cofins' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'codclasse',
		'aliquota_cofins',
		'validade_cofins',
		'codempresa'
	];
}
