<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContReg0200
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cod_item
 * @property string|null $descr_item
 * @property string|null $cod_barra
 * @property string|null $cod_ant_item
 * @property string|null $unid_inv
 * @property string|null $tipo_item
 * @property string|null $cod_ncm
 * @property string|null $ex_ipi
 * @property string|null $cod_gen
 * @property string|null $cod_lst
 * @property float|null $aliq_icms
 *
 * @package App\Models
 */
class ContReg0200 extends Model
{
	protected $table = 'cont_reg_0200';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'aliq_icms' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'cod_item',
		'descr_item',
		'cod_barra',
		'cod_ant_item',
		'unid_inv',
		'tipo_item',
		'cod_ncm',
		'ex_ipi',
		'cod_gen',
		'cod_lst',
		'aliq_icms'
	];
}
