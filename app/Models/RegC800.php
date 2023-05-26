<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC800
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_mod
 * @property string|null $cod_sit
 * @property string|null $num_cfe
 * @property Carbon|null $dt_doc
 * @property float|null $vl_cfe
 * @property float|null $vl_pis
 * @property float|null $vl_cofins
 * @property string|null $cnpj_cpf
 * @property string|null $nr_sat
 * @property string|null $chv_cfe
 * @property float|null $vl_desc
 * @property float|null $vl_merc
 * @property float|null $vl_out_da
 * @property float|null $vl_icms
 * @property float|null $vl_pis_st
 * @property float|null $vl_cofins_st
 *
 * @package App\Models
 */
class RegC800 extends Model
{
	protected $table = 'reg_c800';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_doc' => 'datetime',
		'vl_cfe' => 'float',
		'vl_pis' => 'float',
		'vl_cofins' => 'float',
		'vl_desc' => 'float',
		'vl_merc' => 'float',
		'vl_out_da' => 'float',
		'vl_icms' => 'float',
		'vl_pis_st' => 'float',
		'vl_cofins_st' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_mod',
		'cod_sit',
		'num_cfe',
		'dt_doc',
		'vl_cfe',
		'vl_pis',
		'vl_cofins',
		'cnpj_cpf',
		'nr_sat',
		'chv_cfe',
		'vl_desc',
		'vl_merc',
		'vl_out_da',
		'vl_icms',
		'vl_pis_st',
		'vl_cofins_st'
	];
}
