<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg1960
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $ind_ap
 * @property float|null $g1_01
 * @property float|null $g1_02
 * @property float|null $g1_03
 * @property float|null $g1_04
 * @property float|null $g1_05
 * @property float|null $g1_06
 * @property float|null $g1_07
 * @property float|null $g1_08
 * @property float|null $g1_09
 * @property float|null $g1_10
 * @property float|null $g1_11
 *
 * @package App\Models
 */
class Reg1960 extends Model
{
	protected $table = 'reg_1960';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'g1_01' => 'float',
		'g1_02' => 'float',
		'g1_03' => 'float',
		'g1_04' => 'float',
		'g1_05' => 'float',
		'g1_06' => 'float',
		'g1_07' => 'float',
		'g1_08' => 'float',
		'g1_09' => 'float',
		'g1_10' => 'float',
		'g1_11' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'ind_ap',
		'g1_01',
		'g1_02',
		'g1_03',
		'g1_04',
		'g1_05',
		'g1_06',
		'g1_07',
		'g1_08',
		'g1_09',
		'g1_10',
		'g1_11'
	];
}
