<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegM615
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $ind_aj_bc
 * @property float|null $vl_aj_bc
 * @property string|null $cod_aj_bc
 * @property string|null $num_doc
 * @property string|null $descr_aj_bc
 * @property Carbon|null $dt_ref
 * @property string|null $cod_cta
 * @property string|null $cnpj
 * @property string|null $info_compl
 *
 * @package App\Models
 */
class ContRegM615 extends Model
{
	protected $table = 'cont_reg_m615';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_aj_bc' => 'float',
		'dt_ref' => 'datetime'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'ind_aj_bc',
		'vl_aj_bc',
		'cod_aj_bc',
		'num_doc',
		'descr_aj_bc',
		'dt_ref',
		'cod_cta',
		'cnpj',
		'info_compl'
	];
}
