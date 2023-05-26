<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegB350
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_ctd
 * @property string|null $cta_iss
 * @property string|null $cta_cosif
 * @property string|null $qtd_ocor
 * @property string|null $cod_serv
 * @property float|null $vl_cont
 * @property float|null $vl_bc_iss
 * @property float|null $aliq_iss
 * @property float|null $vl_iss
 * @property string|null $cod_inf_obs
 *
 * @package App\Models
 */
class RegB350 extends Model
{
	protected $table = 'reg_b350';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_cont' => 'float',
		'vl_bc_iss' => 'float',
		'aliq_iss' => 'float',
		'vl_iss' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_ctd',
		'cta_iss',
		'cta_cosif',
		'qtd_ocor',
		'cod_serv',
		'vl_cont',
		'vl_bc_iss',
		'aliq_iss',
		'vl_iss',
		'cod_inf_obs'
	];
}
