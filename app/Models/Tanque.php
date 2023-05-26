<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tanque
 * 
 * @property int $cod_tan
 * @property string $cod_prd
 * @property int $cap_max
 * @property int $cap_min
 * @property float $med_dmt
 * @property float $med_cmp
 * @property int $num_fis
 * @property float|null $est_ini
 * @property float|null $est_atu
 * @property float|null $est_atu_med
 * @property float|null $vlr_ent
 * @property float|null $vlr_sai
 * @property Carbon|null $dat_ult_ent
 * @property Carbon|null $dat_ult_sai
 * @property string|null $num_nf
 * @property string|null $cod_fil
 * @property int|null $codempresa
 * 
 * @property C000025 $c000025
 * @property Collection|Bomba[] $bombas
 * @property Collection|TanqueEscala[] $tanque_escalas
 * @property Collection|TanqueMedicao[] $tanque_medicaos
 *
 * @package App\Models
 */
class Tanque extends Model
{
	protected $table = 'tanque';
	protected $primaryKey = 'cod_tan';
	public $timestamps = false;

	protected $casts = [
		'cap_max' => 'int',
		'cap_min' => 'int',
		'med_dmt' => 'float',
		'med_cmp' => 'float',
		'num_fis' => 'int',
		'est_ini' => 'float',
		'est_atu' => 'float',
		'est_atu_med' => 'float',
		'vlr_ent' => 'float',
		'vlr_sai' => 'float',
		'dat_ult_ent' => 'datetime',
		'dat_ult_sai' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'cod_prd',
		'cap_max',
		'cap_min',
		'med_dmt',
		'med_cmp',
		'num_fis',
		'est_ini',
		'est_atu',
		'est_atu_med',
		'vlr_ent',
		'vlr_sai',
		'dat_ult_ent',
		'dat_ult_sai',
		'num_nf',
		'cod_fil',
		'codempresa'
	];

	public function c000025()
	{
		return $this->belongsTo(C000025::class, 'cod_prd');
	}

	public function bombas()
	{
		return $this->hasMany(Bomba::class, 'cod_tan');
	}

	public function tanque_escalas()
	{
		return $this->hasMany(TanqueEscala::class, 'cod_tan');
	}

	public function tanque_medicaos()
	{
		return $this->hasMany(TanqueMedicao::class, 'cod_tan');
	}
}
