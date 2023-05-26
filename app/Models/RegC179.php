<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC179
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property float|null $bc_st_orig_dest
 * @property float|null $icms_st_rep
 * @property float|null $icms_st_compl
 * @property float|null $bc_ret
 * @property float|null $icms_ret
 *
 * @package App\Models
 */
class RegC179 extends Model
{
	protected $table = 'reg_c179';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'bc_st_orig_dest' => 'float',
		'icms_st_rep' => 'float',
		'icms_st_compl' => 'float',
		'bc_ret' => 'float',
		'icms_ret' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'bc_st_orig_dest',
		'icms_st_rep',
		'icms_st_compl',
		'bc_ret',
		'icms_ret'
	];
}
