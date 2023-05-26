<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000012
 * 
 * @property string $codigo
 * @property string|null $grupo
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000012 extends Model
{
	protected $table = 'c000012';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'grupo',
		'codempresa'
	];
}
