<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegA100
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $ind_oper
 * @property string|null $ind_emit
 * @property string|null $cod_part
 * @property string|null $cod_sit
 * @property string|null $ser
 * @property string|null $sub
 * @property string|null $num_doc
 * @property string|null $chv_nfse
 * @property Carbon|null $dt_doc
 * @property Carbon|null $dt_exe_serv
 * @property float|null $vl_doc
 * @property string|null $ind_pgto
 * @property float|null $vl_desc
 * @property float|null $vl_bc_pis
 * @property float|null $vl_pis
 * @property float|null $vl_bc_cofins
 * @property float|null $vl_cofins
 * @property float|null $vl_pis_ret
 * @property float|null $vl_cofins_ret
 * @property float|null $vl_iss
 *
 * @package App\Models
 */
class ContRegA100 extends Model
{
	protected $table = 'cont_reg_a100';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_doc' => 'datetime',
		'dt_exe_serv' => 'datetime',
		'vl_doc' => 'float',
		'vl_desc' => 'float',
		'vl_bc_pis' => 'float',
		'vl_pis' => 'float',
		'vl_bc_cofins' => 'float',
		'vl_cofins' => 'float',
		'vl_pis_ret' => 'float',
		'vl_cofins_ret' => 'float',
		'vl_iss' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'ind_oper',
		'ind_emit',
		'cod_part',
		'cod_sit',
		'ser',
		'sub',
		'num_doc',
		'chv_nfse',
		'dt_doc',
		'dt_exe_serv',
		'vl_doc',
		'ind_pgto',
		'vl_desc',
		'vl_bc_pis',
		'vl_pis',
		'vl_bc_cofins',
		'vl_cofins',
		'vl_pis_ret',
		'vl_cofins_ret',
		'vl_iss'
	];
}
