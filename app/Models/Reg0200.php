<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg0200
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
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
 * @property string|null $cest
 *
 * @package App\Models
 */
class Reg0200 extends Model
{
	protected $table = 'reg_0200';
	public $timestamps = false;

	protected $casts = [
		'id_pai' => 'int',
		'linha' => 'int',
		'aliq_icms' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
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
		'aliq_icms',
		'cest'
	];
}
