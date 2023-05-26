<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000058
 * 
 * @property int $tiporegistro
 * @property int|null $movimento
 * @property string|null $codregistro
 * @property int|null $situacao
 * @property int|null $c01
 * @property int|null $c02
 * @property int|null $c03
 * @property int|null $c04
 * @property int|null $c05
 * @property int|null $c06
 * @property int|null $c07
 * @property int|null $c08
 * @property int|null $c09
 * @property int|null $c10
 * @property int|null $c11
 * @property int|null $c12
 * @property int|null $c13
 * @property int|null $c14
 * @property int|null $c15
 * @property int|null $c16
 * @property int|null $c17
 * @property int|null $c18
 * @property int|null $c19
 * @property int|null $c20
 * @property int|null $c21
 * @property int|null $c22
 * @property int|null $c23
 * @property int|null $c24
 * @property int|null $c25
 * @property int|null $c26
 * @property int|null $c27
 * @property int|null $c28
 * @property int|null $c29
 * @property int|null $c30
 * @property Carbon|null $data
 * @property int $codigo
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class C000058 extends Model
{
	protected $table = 'c000058';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'tiporegistro' => 'int',
		'movimento' => 'int',
		'situacao' => 'int',
		'c01' => 'int',
		'c02' => 'int',
		'c03' => 'int',
		'c04' => 'int',
		'c05' => 'int',
		'c06' => 'int',
		'c07' => 'int',
		'c08' => 'int',
		'c09' => 'int',
		'c10' => 'int',
		'c11' => 'int',
		'c12' => 'int',
		'c13' => 'int',
		'c14' => 'int',
		'c15' => 'int',
		'c16' => 'int',
		'c17' => 'int',
		'c18' => 'int',
		'c19' => 'int',
		'c20' => 'int',
		'c21' => 'int',
		'c22' => 'int',
		'c23' => 'int',
		'c24' => 'int',
		'c25' => 'int',
		'c26' => 'int',
		'c27' => 'int',
		'c28' => 'int',
		'c29' => 'int',
		'c30' => 'int',
		'data' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'tiporegistro',
		'movimento',
		'codregistro',
		'situacao',
		'c01',
		'c02',
		'c03',
		'c04',
		'c05',
		'c06',
		'c07',
		'c08',
		'c09',
		'c10',
		'c11',
		'c12',
		'c13',
		'c14',
		'c15',
		'c16',
		'c17',
		'c18',
		'c19',
		'c20',
		'c21',
		'c22',
		'c23',
		'c24',
		'c25',
		'c26',
		'c27',
		'c28',
		'c29',
		'c30',
		'data',
		'codempresa'
	];
}
