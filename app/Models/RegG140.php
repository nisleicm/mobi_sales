<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegG140
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $num_item
 * @property string|null $cod_item
 * @property float|null $qtde
 * @property string|null $unid
 * @property float|null $vl_icms_op_aplicado
 * @property float|null $vl_icms_st_aplicado
 * @property float|null $vl_icms_frt_aplicado
 * @property float|null $vl_icms_dif_aplicado
 *
 * @package App\Models
 */
class RegG140 extends Model
{
	protected $table = 'reg_g140';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'qtde' => 'float',
		'vl_icms_op_aplicado' => 'float',
		'vl_icms_st_aplicado' => 'float',
		'vl_icms_frt_aplicado' => 'float',
		'vl_icms_dif_aplicado' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'num_item',
		'cod_item',
		'qtde',
		'unid',
		'vl_icms_op_aplicado',
		'vl_icms_st_aplicado',
		'vl_icms_frt_aplicado',
		'vl_icms_dif_aplicado'
	];
}
