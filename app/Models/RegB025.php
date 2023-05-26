<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegB025
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property float|null $vl_cont_p
 * @property float|null $vl_bc_iss_p
 * @property float|null $aliq_iss
 * @property float|null $vl_iss_p
 * @property float|null $vl_isnt_iss_p
 * @property string|null $cod_serv
 *
 * @package App\Models
 */
class RegB025 extends Model
{
	protected $table = 'reg_b025';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_cont_p' => 'float',
		'vl_bc_iss_p' => 'float',
		'aliq_iss' => 'float',
		'vl_iss_p' => 'float',
		'vl_isnt_iss_p' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'vl_cont_p',
		'vl_bc_iss_p',
		'aliq_iss',
		'vl_iss_p',
		'vl_isnt_iss_p',
		'cod_serv'
	];
}
