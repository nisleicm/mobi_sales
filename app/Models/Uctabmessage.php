<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Uctabmessage
 * 
 * @property int|null $idmsg
 * @property int|null $usrfrom
 * @property int|null $usrto
 * @property string|null $subject
 * @property string|null $msg
 * @property string|null $dtsend
 * @property string|null $dtreceive
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class Uctabmessage extends Model
{
	protected $table = 'uctabmessages';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idmsg' => 'int',
		'usrfrom' => 'int',
		'usrto' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'idmsg',
		'usrfrom',
		'usrto',
		'subject',
		'msg',
		'dtsend',
		'dtreceive',
		'codempresa'
	];
}
