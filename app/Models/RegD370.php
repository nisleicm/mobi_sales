<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegD370
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_mun_orig
 * @property float|null $vl_serv
 * @property string|null $qtd_bilh
 * @property float|null $vl_bc_icms
 * @property float|null $vl_icms
 *
 * @package App\Models
 */
class RegD370 extends Model
{
	protected $table = 'reg_d370';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_serv' => 'float',
		'vl_bc_icms' => 'float',
		'vl_icms' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_mun_orig',
		'vl_serv',
		'qtd_bilh',
		'vl_bc_icms',
		'vl_icms'
	];
}
