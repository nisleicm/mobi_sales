<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContReg1050
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property Carbon|null $dt_ref
 * @property string|null $ind_aj_bc
 * @property string|null $cnpj
 * @property float|null $vl_aj_tot
 * @property float|null $vl_aj_cst01
 * @property float|null $vl_aj_cst02
 * @property float|null $vl_aj_cst03
 * @property float|null $vl_aj_cst04
 * @property float|null $vl_aj_cst05
 * @property float|null $vl_aj_cst06
 * @property float|null $vl_aj_cst07
 * @property float|null $vl_aj_cst08
 * @property float|null $vl_aj_cst09
 * @property float|null $vl_aj_cst49
 * @property float|null $vl_aj_cst99
 * @property string|null $ind_aprop
 * @property string|null $num_rec
 * @property string|null $info_compl
 *
 * @package App\Models
 */
class ContReg1050 extends Model
{
	protected $table = 'cont_reg_1050';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_ref' => 'datetime',
		'vl_aj_tot' => 'float',
		'vl_aj_cst01' => 'float',
		'vl_aj_cst02' => 'float',
		'vl_aj_cst03' => 'float',
		'vl_aj_cst04' => 'float',
		'vl_aj_cst05' => 'float',
		'vl_aj_cst06' => 'float',
		'vl_aj_cst07' => 'float',
		'vl_aj_cst08' => 'float',
		'vl_aj_cst09' => 'float',
		'vl_aj_cst49' => 'float',
		'vl_aj_cst99' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'dt_ref',
		'ind_aj_bc',
		'cnpj',
		'vl_aj_tot',
		'vl_aj_cst01',
		'vl_aj_cst02',
		'vl_aj_cst03',
		'vl_aj_cst04',
		'vl_aj_cst05',
		'vl_aj_cst06',
		'vl_aj_cst07',
		'vl_aj_cst08',
		'vl_aj_cst09',
		'vl_aj_cst49',
		'vl_aj_cst99',
		'ind_aprop',
		'num_rec',
		'info_compl'
	];
}
