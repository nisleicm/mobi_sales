<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TanqueMedicao
 * 
 * @property int $cod_med_tan
 * @property int $cod_tan
 * @property Carbon $dat_med
 * @property float $med_alt
 * @property float $med_qtd_ltr
 * @property string|null $obs_med
 * @property float $qtd_ltr_tan
 * @property int|null $codempresa
 * 
 * @property Tanque $tanque
 *
 * @package App\Models
 */
class TanqueMedicao extends Model
{
	protected $table = 'tanque_medicao';
	protected $primaryKey = 'cod_med_tan';
	public $timestamps = false;

	protected $casts = [
		'cod_tan' => 'int',
		'dat_med' => 'datetime',
		'med_alt' => 'float',
		'med_qtd_ltr' => 'float',
		'qtd_ltr_tan' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'cod_tan',
		'dat_med',
		'med_alt',
		'med_qtd_ltr',
		'obs_med',
		'qtd_ltr_tan',
		'codempresa'
	];

	public function tanque()
	{
		return $this->belongsTo(Tanque::class, 'cod_tan');
	}
}
