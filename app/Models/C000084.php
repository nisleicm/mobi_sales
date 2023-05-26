<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000084
 * 
 * @property string $codigo
 * @property string|null $classe
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000084 extends Model
{
	protected $table = 'c000084';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'classe'
	];
}
