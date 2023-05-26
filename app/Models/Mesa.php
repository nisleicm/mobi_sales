<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mesa
 * 
 * @property int $num
 * @property string|null $status
 * @property int $codempresa
 *
 * @package App\Models
 */
class Mesa extends Model
{
	protected $table = 'mesas';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'num' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'status'
	];
}
