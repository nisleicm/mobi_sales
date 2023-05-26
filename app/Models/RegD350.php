<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegD350
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_mod
 * @property string|null $ecf_mod
 * @property string|null $ecf_fab
 * @property string|null $ecf_cx
 *
 * @package App\Models
 */
class RegD350 extends Model
{
	protected $table = 'reg_d350';
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
		'cod_mod',
		'ecf_mod',
		'ecf_fab',
		'ecf_cx'
	];
}
