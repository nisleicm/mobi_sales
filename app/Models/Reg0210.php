<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg0210
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_item_comp
 * @property float|null $qtd_comp
 * @property float|null $perda
 *
 * @package App\Models
 */
class Reg0210 extends Model
{
	protected $table = 'reg_0210';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'qtd_comp' => 'float',
		'perda' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_item_comp',
		'qtd_comp',
		'perda'
	];
}
