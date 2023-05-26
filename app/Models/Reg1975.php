<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg1975
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property float|null $aliq_imp_base
 * @property float|null $g3_10
 * @property float|null $g3_11
 * @property float|null $g3_12
 *
 * @package App\Models
 */
class Reg1975 extends Model
{
	protected $table = 'reg_1975';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'aliq_imp_base' => 'float',
		'g3_10' => 'float',
		'g3_11' => 'float',
		'g3_12' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'aliq_imp_base',
		'g3_10',
		'g3_11',
		'g3_12'
	];
}
