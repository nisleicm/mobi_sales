<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegP210
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $ind_aj
 * @property float|null $vl_aj
 * @property string|null $cod_aj
 * @property string|null $num_doc
 * @property string|null $descr_aj
 * @property Carbon|null $dt_ref
 *
 * @package App\Models
 */
class ContRegP210 extends Model
{
	protected $table = 'cont_reg_p210';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_aj' => 'float',
		'dt_ref' => 'datetime'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'ind_aj',
		'vl_aj',
		'cod_aj',
		'num_doc',
		'descr_aj',
		'dt_ref'
	];
}
