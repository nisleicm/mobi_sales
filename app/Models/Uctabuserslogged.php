<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Uctabuserslogged
 * 
 * @property string|null $ucidlogon
 * @property int|null $uciduser
 * @property string|null $ucapplicationid
 * @property string|null $ucmachinename
 * @property string|null $ucdata
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class Uctabuserslogged extends Model
{
	protected $table = 'uctabuserslogged';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'uciduser' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'ucidlogon',
		'uciduser',
		'ucapplicationid',
		'ucmachinename',
		'ucdata',
		'codempresa'
	];
}
