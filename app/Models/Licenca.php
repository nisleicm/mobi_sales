<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Licenca
 * 
 * @property int|null $id
 * @property string|null $r1
 * @property string|null $r2
 * @property string|null $r3
 * @property string|null $r4
 * @property string|null $r5
 * @property string|null $r6
 * @property string|null $r7
 * @property string|null $r8
 * @property string|null $r9
 * @property string|null $r10
 * @property string|null $r11
 * @property string|null $r12
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class Licenca extends Model
{
	protected $table = 'licenca';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'id',
		'r1',
		'r2',
		'r3',
		'r4',
		'r5',
		'r6',
		'r7',
		'r8',
		'r9',
		'r10',
		'r11',
		'r12',
		'codempresa'
	];
}
