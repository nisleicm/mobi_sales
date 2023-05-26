<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegH020
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cst_icms
 * @property float|null $bl_icms
 * @property float|null $vl_icms
 *
 * @package App\Models
 */
class RegH020 extends Model
{
	protected $table = 'reg_h020';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'bl_icms' => 'float',
		'vl_icms' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cst_icms',
		'bl_icms',
		'vl_icms'
	];
}
