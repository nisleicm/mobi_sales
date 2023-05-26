<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg1360
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $num_lacre
 * @property Carbon|null $dat_aplicacao
 *
 * @package App\Models
 */
class Reg1360 extends Model
{
	protected $table = 'reg_1360';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dat_aplicacao' => 'datetime'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'num_lacre',
		'dat_aplicacao'
	];
}
