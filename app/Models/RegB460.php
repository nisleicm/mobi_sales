<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegB460
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $ind_ded
 * @property float|null $vl_ded
 * @property string|null $num_proc
 * @property string|null $ind_proc
 * @property string|null $proc
 * @property string|null $cod_inf_obs
 * @property string|null $ind_obr
 *
 * @package App\Models
 */
class RegB460 extends Model
{
	protected $table = 'reg_b460';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_ded' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'ind_ded',
		'vl_ded',
		'num_proc',
		'ind_proc',
		'proc',
		'cod_inf_obs',
		'ind_obr'
	];
}
