<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegF600
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $ind_nat_ret
 * @property Carbon|null $dt_ret
 * @property float|null $vl_bc_ret
 * @property float|null $vl_ret
 * @property string|null $cod_rec
 * @property string|null $ind_nat_rec
 * @property string|null $cnpj
 * @property float|null $vl_ret_pis
 * @property float|null $vl_ret_cofins
 * @property string|null $ind_dec
 *
 * @package App\Models
 */
class ContRegF600 extends Model
{
	protected $table = 'cont_reg_f600';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_ret' => 'datetime',
		'vl_bc_ret' => 'float',
		'vl_ret' => 'float',
		'vl_ret_pis' => 'float',
		'vl_ret_cofins' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'ind_nat_ret',
		'dt_ret',
		'vl_bc_ret',
		'vl_ret',
		'cod_rec',
		'ind_nat_rec',
		'cnpj',
		'vl_ret_pis',
		'vl_ret_cofins',
		'ind_dec'
	];
}
