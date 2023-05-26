<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000005
 * 
 * @property string $codigo
 * @property string|null $regiao
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000005 extends Model
{
	protected $table = 'c000005';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'regiao',
		'codempresa'
	];
}
