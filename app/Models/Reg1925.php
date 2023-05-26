<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg1925
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_inf_adic
 * @property float|null $vl_inf_adic
 * @property string|null $desc_compl_aj
 *
 * @package App\Models
 */
class Reg1925 extends Model
{
	protected $table = 'reg_1925';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_inf_adic' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_inf_adic',
		'vl_inf_adic',
		'desc_compl_aj'
	];
}
