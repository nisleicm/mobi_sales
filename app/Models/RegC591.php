<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC591
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property float|null $vl_fcp_op
 * @property float|null $vl_fcp_st
 *
 * @package App\Models
 */
class RegC591 extends Model
{
	protected $table = 'reg_c591';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_fcp_op' => 'float',
		'vl_fcp_st' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'vl_fcp_op',
		'vl_fcp_st'
	];
}
