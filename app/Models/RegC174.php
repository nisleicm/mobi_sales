<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC174
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $ind_arm
 * @property string|null $num_arm
 * @property string|null $descr_compl
 *
 * @package App\Models
 */
class RegC174 extends Model
{
	protected $table = 'reg_c174';
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
		'ind_arm',
		'num_arm',
		'descr_compl'
	];
}
