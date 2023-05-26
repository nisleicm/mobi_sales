<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg1370
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $num_bico
 * @property string|null $cod_item
 * @property string|null $num_tanque
 *
 * @package App\Models
 */
class Reg1370 extends Model
{
	protected $table = 'reg_1370';
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
		'num_bico',
		'cod_item',
		'num_tanque'
	];
}
