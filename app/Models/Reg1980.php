<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg1980
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $ind_ap
 * @property float|null $g4_01
 * @property float|null $g4_02
 * @property float|null $g4_03
 * @property float|null $g4_04
 * @property float|null $g4_05
 * @property float|null $g4_06
 * @property float|null $g4_07
 * @property float|null $g4_08
 * @property float|null $g4_09
 * @property float|null $g4_10
 * @property float|null $g4_11
 * @property float|null $g4_12
 *
 * @package App\Models
 */
class Reg1980 extends Model
{
	protected $table = 'reg_1980';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'g4_01' => 'float',
		'g4_02' => 'float',
		'g4_03' => 'float',
		'g4_04' => 'float',
		'g4_05' => 'float',
		'g4_06' => 'float',
		'g4_07' => 'float',
		'g4_08' => 'float',
		'g4_09' => 'float',
		'g4_10' => 'float',
		'g4_11' => 'float',
		'g4_12' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'ind_ap',
		'g4_01',
		'g4_02',
		'g4_03',
		'g4_04',
		'g4_05',
		'g4_06',
		'g4_07',
		'g4_08',
		'g4_09',
		'g4_10',
		'g4_11',
		'g4_12'
	];
}
