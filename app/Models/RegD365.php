<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegD365
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_tot_par
 * @property float|null $vlr_acum_tot
 * @property string|null $nr_tot
 * @property string|null $descr_nr_tot
 *
 * @package App\Models
 */
class RegD365 extends Model
{
	protected $table = 'reg_d365';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vlr_acum_tot' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_tot_par',
		'vlr_acum_tot',
		'nr_tot',
		'descr_nr_tot'
	];
}
