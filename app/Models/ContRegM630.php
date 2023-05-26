<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegM630
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cnpj
 * @property float|null $vl_vend
 * @property float|null $vl_nao_receb
 * @property float|null $vl_cont_dif
 * @property float|null $vl_cred_dif
 * @property string|null $cod_cred
 *
 * @package App\Models
 */
class ContRegM630 extends Model
{
	protected $table = 'cont_reg_m630';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_vend' => 'float',
		'vl_nao_receb' => 'float',
		'vl_cont_dif' => 'float',
		'vl_cred_dif' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'cnpj',
		'vl_vend',
		'vl_nao_receb',
		'vl_cont_dif',
		'vl_cred_dif',
		'cod_cred'
	];
}
