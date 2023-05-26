<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegB440
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $ind_oper
 * @property string|null $cod_part
 * @property float|null $vl_cont_rt
 * @property float|null $vl_bc_iss_rt
 * @property float|null $vl_iss_rt
 *
 * @package App\Models
 */
class RegB440 extends Model
{
	protected $table = 'reg_b440';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_cont_rt' => 'float',
		'vl_bc_iss_rt' => 'float',
		'vl_iss_rt' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'ind_oper',
		'cod_part',
		'vl_cont_rt',
		'vl_bc_iss_rt',
		'vl_iss_rt'
	];
}
