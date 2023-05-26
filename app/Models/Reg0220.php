<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg0220
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $unid_conv
 * @property float|null $fat_conv
 *
 * @package App\Models
 */
class Reg0220 extends Model
{
	protected $table = 'reg_0220';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'fat_conv' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'unid_conv',
		'fat_conv'
	];
}
