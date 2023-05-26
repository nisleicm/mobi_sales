<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000084a
 * 
 * @property string|null $codigo
 * @property string|null $codclasse
 * @property float|null $aliquota_pis
 * @property Carbon|null $validade_pis
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class C000084a extends Model
{
	protected $table = 'c000084a';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'aliquota_pis' => 'float',
		'validade_pis' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'codclasse',
		'aliquota_pis',
		'validade_pis',
		'codempresa'
	];
}
