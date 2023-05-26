<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC178
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cl_enq
 * @property float|null $vl_unid
 * @property float|null $quant_pad
 *
 * @package App\Models
 */
class RegC178 extends Model
{
	protected $table = 'reg_c178';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_unid' => 'float',
		'quant_pad' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cl_enq',
		'vl_unid',
		'quant_pad'
	];
}
