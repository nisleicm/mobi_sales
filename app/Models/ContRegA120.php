<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegA120
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property float|null $vl_tot_serv
 * @property float|null $vl_bc_pis
 * @property float|null $vl_pis_imp
 * @property Carbon|null $dt_pag_pis
 * @property float|null $vl_bc_cofins
 * @property float|null $vl_cofins_imp
 * @property Carbon|null $dt_pag_cofins
 * @property string|null $loc_exe_serv
 *
 * @package App\Models
 */
class ContRegA120 extends Model
{
	protected $table = 'cont_reg_a120';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_tot_serv' => 'float',
		'vl_bc_pis' => 'float',
		'vl_pis_imp' => 'float',
		'dt_pag_pis' => 'datetime',
		'vl_bc_cofins' => 'float',
		'vl_cofins_imp' => 'float',
		'dt_pag_cofins' => 'datetime'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'vl_tot_serv',
		'vl_bc_pis',
		'vl_pis_imp',
		'dt_pag_pis',
		'vl_bc_cofins',
		'vl_cofins_imp',
		'dt_pag_cofins',
		'loc_exe_serv'
	];
}
