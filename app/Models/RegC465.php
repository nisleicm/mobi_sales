<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC465
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $chv_cfe
 * @property string|null $num_ccf
 *
 * @package App\Models
 */
class RegC465 extends Model
{
	protected $table = 'reg_c465';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'chv_cfe',
		'num_ccf'
	];
}
