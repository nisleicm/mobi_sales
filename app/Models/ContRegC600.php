<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegC600
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cod_mod
 * @property string|null $cod_mun
 * @property string|null $ser
 * @property string|null $sub
 * @property string|null $cod_cons
 * @property string|null $qtd_cons
 * @property string|null $qtd_canc
 * @property Carbon|null $dt_doc
 * @property float|null $vl_doc
 * @property float|null $vl_desc
 * @property string|null $cons
 * @property float|null $vl_forn
 * @property float|null $vl_serv_nt
 * @property float|null $vl_terc
 * @property float|null $vl_da
 * @property float|null $vl_bc_icms
 * @property float|null $vl_icms
 * @property float|null $vl_bc_icms_st
 * @property float|null $vl_icms_st
 * @property float|null $vl_pis
 * @property float|null $vl_cofins
 *
 * @package App\Models
 */
class ContRegC600 extends Model
{
	protected $table = 'cont_reg_c600';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_doc' => 'datetime',
		'vl_doc' => 'float',
		'vl_desc' => 'float',
		'vl_forn' => 'float',
		'vl_serv_nt' => 'float',
		'vl_terc' => 'float',
		'vl_da' => 'float',
		'vl_bc_icms' => 'float',
		'vl_icms' => 'float',
		'vl_bc_icms_st' => 'float',
		'vl_icms_st' => 'float',
		'vl_pis' => 'float',
		'vl_cofins' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'cod_mod',
		'cod_mun',
		'ser',
		'sub',
		'cod_cons',
		'qtd_cons',
		'qtd_canc',
		'dt_doc',
		'vl_doc',
		'vl_desc',
		'cons',
		'vl_forn',
		'vl_serv_nt',
		'vl_terc',
		'vl_da',
		'vl_bc_icms',
		'vl_icms',
		'vl_bc_icms_st',
		'vl_icms_st',
		'vl_pis',
		'vl_cofins'
	];
}
