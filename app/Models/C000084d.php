<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000084d
 * 
 * @property string|null $codigo
 * @property string|null $codclasse
 * @property float|null $aliquota_irrf
 * @property Carbon|null $validade_irrf
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class C000084d extends Model
{
	protected $table = 'c000084d';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'aliquota_irrf' => 'float',
		'validade_irrf' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'codclasse',
		'aliquota_irrf',
		'validade_irrf',
		'codempresa'
	];
}
