<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Rastreabilidade
 * 
 * @property int $codigo
 * @property string $coditem
 * @property string $nlote
 * @property float $qlote
 * @property Carbon $dfab
 * @property Carbon $dval
 * @property string|null $cagreg
 * @property int $codempresa
 *
 * @package App\Models
 */
class Rastreabilidade extends Model
{
	protected $table = 'rastreabilidade';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'qlote' => 'float',
		'dfab' => 'datetime',
		'dval' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'coditem',
		'nlote',
		'qlote',
		'dfab',
		'dval',
		'cagreg',
		'codempresa'
	];
}
