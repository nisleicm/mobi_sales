<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContReg0500
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property Carbon|null $dt_alt
 * @property string|null $cod_nat_cc
 * @property string|null $ind_cta
 * @property string|null $nivel
 * @property string|null $cod_cta
 * @property string|null $nome_cta
 * @property string|null $cod_cta_ref
 * @property string|null $cnpj_est
 *
 * @package App\Models
 */
class ContReg0500 extends Model
{
	protected $table = 'cont_reg_0500';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_alt' => 'datetime'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'dt_alt',
		'cod_nat_cc',
		'ind_cta',
		'nivel',
		'cod_cta',
		'nome_cta',
		'cod_cta_ref',
		'cnpj_est'
	];
}
