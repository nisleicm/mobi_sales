<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000084c
 * 
 * @property string|null $codigo
 * @property string|null $codclasse
 * @property float|null $aliquota_csll
 * @property Carbon|null $validade_csll
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class C000084c extends Model
{
	protected $table = 'c000084c';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'aliquota_csll' => 'float',
		'validade_csll' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'codclasse',
		'aliquota_csll',
		'validade_csll',
		'codempresa'
	];
}
