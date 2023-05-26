<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000024
 * 
 * @property string $codigo
 * @property string|null $receita
 * @property Carbon|null $datamov
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000024 extends Model
{
	protected $table = 'c000024';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'datamov' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'receita',
		'datamov',
		'codempresa'
	];
}
