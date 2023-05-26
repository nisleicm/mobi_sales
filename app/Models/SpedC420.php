<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SpedC420
 * 
 * @property string|null $codigo
 * @property string|null $codc405
 * @property string|null $reg
 * @property string|null $cod_tot_par
 * @property float|null $vlr_acum_tot
 * @property int|null $nr_tot
 * @property string|null $descr_nr_tot
 * @property int $codempresa
 *
 * @package App\Models
 */
class SpedC420 extends Model
{
	protected $table = 'sped_c420';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'vlr_acum_tot' => 'float',
		'nr_tot' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'codc405',
		'reg',
		'cod_tot_par',
		'vlr_acum_tot',
		'nr_tot',
		'descr_nr_tot',
		'codempresa'
	];
}
