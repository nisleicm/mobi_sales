<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegD410
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_mod
 * @property string|null $ser
 * @property string|null $sub
 * @property string|null $num_doc_ini
 * @property string|null $num_doc_fin
 * @property Carbon|null $dt_doc
 * @property string|null $cst_icms
 * @property string|null $cfop
 * @property float|null $aliq_icms
 * @property float|null $vl_opr
 * @property float|null $vl_desc
 * @property float|null $vl_serv
 * @property float|null $vl_bc_icms
 * @property float|null $vl_icms
 *
 * @package App\Models
 */
class RegD410 extends Model
{
	protected $table = 'reg_d410';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_doc' => 'datetime',
		'aliq_icms' => 'float',
		'vl_opr' => 'float',
		'vl_desc' => 'float',
		'vl_serv' => 'float',
		'vl_bc_icms' => 'float',
		'vl_icms' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_mod',
		'ser',
		'sub',
		'num_doc_ini',
		'num_doc_fin',
		'dt_doc',
		'cst_icms',
		'cfop',
		'aliq_icms',
		'vl_opr',
		'vl_desc',
		'vl_serv',
		'vl_bc_icms',
		'vl_icms'
	];
}
