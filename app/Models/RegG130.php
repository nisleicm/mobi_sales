<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegG130
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $ind_emit
 * @property string|null $cod_part
 * @property string|null $cod_mod
 * @property string|null $serie
 * @property string|null $num_doc
 * @property string|null $chv_nfe_cte
 * @property Carbon|null $dt_doc
 * @property string|null $num_da
 *
 * @package App\Models
 */
class RegG130 extends Model
{
	protected $table = 'reg_g130';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_doc' => 'datetime'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'ind_emit',
		'cod_part',
		'cod_mod',
		'serie',
		'num_doc',
		'chv_nfe_cte',
		'dt_doc',
		'num_da'
	];
}
