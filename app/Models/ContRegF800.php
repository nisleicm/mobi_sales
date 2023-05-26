<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegF800
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $ind_nat_even
 * @property Carbon|null $dt_even
 * @property string|null $cnpj_suced
 * @property string|null $pa_cont_cred
 * @property string|null $cod_cred
 * @property float|null $vl_cred_pis
 * @property float|null $vl_cred_cofins
 * @property float|null $per_cred_cis
 *
 * @package App\Models
 */
class ContRegF800 extends Model
{
	protected $table = 'cont_reg_f800';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_even' => 'datetime',
		'vl_cred_pis' => 'float',
		'vl_cred_cofins' => 'float',
		'per_cred_cis' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'ind_nat_even',
		'dt_even',
		'cnpj_suced',
		'pa_cont_cred',
		'cod_cred',
		'vl_cred_pis',
		'vl_cred_cofins',
		'per_cred_cis'
	];
}
