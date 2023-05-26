<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Uctabuser
 * 
 * @property int|null $uciduser
 * @property string|null $ucusername
 * @property string|null $uclogin
 * @property string|null $ucpassword
 * @property string|null $ucpassexpired
 * @property int|null $ucuserexpired
 * @property int|null $ucuserdayssun
 * @property string|null $ucemail
 * @property int|null $ucprivileged
 * @property string|null $uctyperec
 * @property int|null $ucprofile
 * @property string|null $uckey
 * @property int|null $ucinative
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class Uctabuser extends Model
{
	protected $table = 'uctabusers';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'uciduser' => 'int',
		'ucuserexpired' => 'int',
		'ucuserdayssun' => 'int',
		'ucprivileged' => 'int',
		'ucprofile' => 'int',
		'ucinative' => 'int',
		'codempresa' => 'int'
	];

	protected $hidden = [
		'ucpassword'
	];

	protected $fillable = [
		'uciduser',
		'ucusername',
		'uclogin',
		'ucpassword',
		'ucpassexpired',
		'ucuserexpired',
		'ucuserdayssun',
		'ucemail',
		'ucprivileged',
		'uctyperec',
		'ucprofile',
		'uckey',
		'ucinative',
		'codempresa'
	];
}
