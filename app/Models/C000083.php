<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000083
 * 
 * @property string|null $codigo
 * @property string|null $situacao
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class C000083 extends Model
{
	protected $table = 'c000083';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'situacao',
		'codempresa'
	];
}
