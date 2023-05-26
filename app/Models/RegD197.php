<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegD197
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_aj
 * @property string|null $descr_compl_aj
 * @property string|null $cod_item
 * @property float|null $vl_bc_icms
 * @property float|null $aliq_icms
 * @property float|null $vl_icms
 * @property float|null $vl_outros
 *
 * @package App\Models
 */
class RegD197 extends Model
{
	protected $table = 'reg_d197';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_bc_icms' => 'float',
		'aliq_icms' => 'float',
		'vl_icms' => 'float',
		'vl_outros' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_aj',
		'descr_compl_aj',
		'cod_item',
		'vl_bc_icms',
		'aliq_icms',
		'vl_icms',
		'vl_outros'
	];
}
