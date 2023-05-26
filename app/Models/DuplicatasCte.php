<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DuplicatasCte
 * 
 * @property string $codigo
 * @property string|null $codcte
 * @property string|null $numero
 * @property Carbon|null $data_venc
 * @property float|null $valor
 * @property int $codempresa
 *
 * @package App\Models
 */
class DuplicatasCte extends Model
{
	protected $table = 'duplicatas_cte';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data_venc' => 'datetime',
		'valor' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codcte',
		'numero',
		'data_venc',
		'valor',
		'codempresa'
	];
}
