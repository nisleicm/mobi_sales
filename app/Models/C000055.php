<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000055
 * 
 * @property string $codigo
 * @property string|null $codproduto
 * @property string|null $codbarra
 * @property Carbon|null $datamov
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000055 extends Model
{
	protected $table = 'c000055';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'datamov' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codproduto',
		'codbarra',
		'datamov',
		'codempresa'
	];
}
