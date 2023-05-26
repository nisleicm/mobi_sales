<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg0500
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property Carbon|null $dt_alt
 * @property string|null $cod_nat_cc
 * @property string|null $ind_cta
 * @property string|null $nivel
 * @property string|null $cod_cta
 * @property string|null $nome_cta
 *
 * @package App\Models
 */
class Reg0500 extends Model
{
	protected $table = 'reg_0500';
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
		'reg',
		'dt_alt',
		'cod_nat_cc',
		'ind_cta',
		'nivel',
		'cod_cta',
		'nome_cta'
	];
}
