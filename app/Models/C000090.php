<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000090
 * 
 * @property string $codigo
 * @property string|null $despesa
 * @property float|null $percentual
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000090 extends Model
{
	protected $table = 'c000090';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'percentual' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'despesa',
		'percentual',
		'codempresa'
	];
}
