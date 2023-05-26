<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SerialMobile
 * 
 * @property string|null $serial
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class SerialMobile extends Model
{
	protected $table = 'serial_mobile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'serial',
		'codempresa'
	];
}
