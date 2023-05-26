<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC191
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property float|null $vl_fcp_op
 * @property float|null $vl_fcp_st
 * @property float|null $vl_fcp_ret
 *
 * @package App\Models
 */
class RegC191 extends Model
{
	protected $table = 'reg_c191';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_fcp_op' => 'float',
		'vl_fcp_st' => 'float',
		'vl_fcp_ret' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'vl_fcp_op',
		'vl_fcp_st',
		'vl_fcp_ret'
	];
}
