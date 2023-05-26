<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC350
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $ser
 * @property string|null $sub_ser
 * @property string|null $num_doc
 * @property Carbon|null $dt_doc
 * @property string|null $cnpj_cpf
 * @property float|null $vl_merc
 * @property float|null $vl_doc
 * @property float|null $vl_desc
 * @property float|null $vl_pis
 * @property float|null $vl_cofis
 * @property string|null $cod_cta
 *
 * @package App\Models
 */
class RegC350 extends Model
{
	protected $table = 'reg_c350';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_doc' => 'datetime',
		'vl_merc' => 'float',
		'vl_doc' => 'float',
		'vl_desc' => 'float',
		'vl_pis' => 'float',
		'vl_cofis' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'ser',
		'sub_ser',
		'num_doc',
		'dt_doc',
		'cnpj_cpf',
		'vl_merc',
		'vl_doc',
		'vl_desc',
		'vl_pis',
		'vl_cofis',
		'cod_cta'
	];
}
