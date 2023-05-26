<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000133
 * 
 * @property string $codigo
 * @property string $un
 * @property string|null $descricao
 * @property Carbon|null $datamov
 *
 * @package App\Models
 */
class C000133 extends Model
{
	protected $table = 'c000133';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'datamov' => 'datetime'
	];

	protected $fillable = [
		'codigo',
		'un',
		'descricao',
		'datamov'
	];
}
