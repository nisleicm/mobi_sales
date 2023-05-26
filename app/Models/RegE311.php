<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegE311
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_aj_apur
 * @property string|null $descr_compl_aj
 * @property float|null $vl_aj_apur
 *
 * @package App\Models
 */
class RegE311 extends Model
{
	protected $table = 'reg_e311';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_aj_apur' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_aj_apur',
		'descr_compl_aj',
		'vl_aj_apur'
	];
}
