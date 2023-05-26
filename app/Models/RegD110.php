<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegD110
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $num_item
 * @property string|null $cod_item
 * @property float|null $vl_serv
 * @property float|null $vl_out
 *
 * @package App\Models
 */
class RegD110 extends Model
{
	protected $table = 'reg_d110';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_serv' => 'float',
		'vl_out' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'num_item',
		'cod_item',
		'vl_serv',
		'vl_out'
	];
}
