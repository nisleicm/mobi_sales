<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC177
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_inf_item
 *
 * @package App\Models
 */
class RegC177 extends Model
{
	protected $table = 'reg_c177';
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
		'cod_inf_item'
	];
}
