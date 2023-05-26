<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000014
 * 
 * @property string $codigo
 * @property string|null $formapgto
 * @property int|null $tipo
 * @property Carbon|null $datamov
 * @property int|null $codempresa
 * @property int $id
 *
 * @package App\Models
 */
class C000014 extends Model
{
	protected $table = 'c000014';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tipo' => 'int',
		'datamov' => 'datetime',
		'codempresa' => 'int',
		'id' => 'int'
	];

	protected $fillable = [
		'formapgto',
		'tipo',
		'datamov',
		'codempresa',
		'id'
	];
}
