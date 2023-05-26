<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegD400
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_part
 * @property string|null $cod_mod
 * @property string|null $cod_sit
 * @property string|null $ser
 * @property string|null $sub
 * @property string|null $num_doc
 * @property Carbon|null $dt_doc
 * @property float|null $vl_doc
 * @property float|null $vl_desc
 * @property float|null $vl_serv
 * @property float|null $vl_bc_icms
 * @property float|null $vl_icms
 * @property float|null $vl_pis
 * @property float|null $vl_cofins
 * @property string|null $cod_cta
 *
 * @package App\Models
 */
class RegD400 extends Model
{
	protected $table = 'reg_d400';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_doc' => 'datetime',
		'vl_doc' => 'float',
		'vl_desc' => 'float',
		'vl_serv' => 'float',
		'vl_bc_icms' => 'float',
		'vl_icms' => 'float',
		'vl_pis' => 'float',
		'vl_cofins' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_part',
		'cod_mod',
		'cod_sit',
		'ser',
		'sub',
		'num_doc',
		'dt_doc',
		'vl_doc',
		'vl_desc',
		'vl_serv',
		'vl_bc_icms',
		'vl_icms',
		'vl_pis',
		'vl_cofins',
		'cod_cta'
	];
}
