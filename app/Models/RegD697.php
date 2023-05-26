<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegD697
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $uf
 * @property float|null $vl_bc_icms_st
 * @property float|null $vl_icms_st
 *
 * @package App\Models
 */
class RegD697 extends Model
{
	protected $table = 'reg_d697';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_bc_icms_st' => 'float',
		'vl_icms_st' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'uf',
		'vl_bc_icms_st',
		'vl_icms_st'
	];
}
