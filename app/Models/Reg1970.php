<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg1970
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $ind_ap
 * @property float|null $g3_01
 * @property float|null $g3_02
 * @property float|null $g3_03
 * @property float|null $g3_04
 * @property float|null $g3_05
 * @property float|null $g3_06
 * @property float|null $g3_07
 * @property float|null $g3_t
 * @property float|null $g3_08
 * @property float|null $g3_09
 *
 * @package App\Models
 */
class Reg1970 extends Model
{
	protected $table = 'reg_1970';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'g3_01' => 'float',
		'g3_02' => 'float',
		'g3_03' => 'float',
		'g3_04' => 'float',
		'g3_05' => 'float',
		'g3_06' => 'float',
		'g3_07' => 'float',
		'g3_t' => 'float',
		'g3_08' => 'float',
		'g3_09' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'ind_ap',
		'g3_01',
		'g3_02',
		'g3_03',
		'g3_04',
		'g3_05',
		'g3_06',
		'g3_07',
		'g3_t',
		'g3_08',
		'g3_09'
	];
}
