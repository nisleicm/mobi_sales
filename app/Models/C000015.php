<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000015
 * 
 * @property string $id
 * @property string|null $condpgto
 * @property int|null $parcelas
 * @property string|null $tementrada
 * @property Carbon|null $datamov
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000015 extends Model
{
	protected $table = 'c000015';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'parcelas' => 'int',
		'datamov' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'condpgto',
		'parcelas',
		'tementrada',
		'datamov',
		'codempresa'
	];
}
