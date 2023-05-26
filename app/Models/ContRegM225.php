<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegM225
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property float|null $det_valor_aj
 * @property string|null $cst_pis
 * @property float|null $det_bc_cred
 * @property float|null $det_aliq
 * @property Carbon|null $dt_oper_aj
 * @property string|null $desc_aj
 * @property string|null $cod_cta
 * @property string|null $info_compl
 *
 * @package App\Models
 */
class ContRegM225 extends Model
{
	protected $table = 'cont_reg_m225';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'det_valor_aj' => 'float',
		'det_bc_cred' => 'float',
		'det_aliq' => 'float',
		'dt_oper_aj' => 'datetime'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'det_valor_aj',
		'cst_pis',
		'det_bc_cred',
		'det_aliq',
		'dt_oper_aj',
		'desc_aj',
		'cod_cta',
		'info_compl'
	];
}
