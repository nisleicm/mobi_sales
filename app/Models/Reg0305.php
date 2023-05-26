<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg0305
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_ccus
 * @property string|null $func
 * @property string|null $vida_util
 *
 * @package App\Models
 */
class Reg0305 extends Model
{
	protected $table = 'reg_0305';
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
		'cod_ccus',
		'func',
		'vida_util'
	];
}
