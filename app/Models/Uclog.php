<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Uclog
 * 
 * @property string|null $applicationid
 * @property int|null $iduser
 * @property string|null $msg
 * @property string|null $data
 * @property int|null $nivel
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class Uclog extends Model
{
	protected $table = 'uclog';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'iduser' => 'int',
		'nivel' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'applicationid',
		'iduser',
		'msg',
		'data',
		'nivel',
		'codempresa'
	];
}
