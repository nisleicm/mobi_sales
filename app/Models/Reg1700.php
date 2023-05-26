<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg1700
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_disp
 * @property string|null $cod_mod
 * @property string|null $ser
 * @property string|null $sub
 * @property string|null $num_doc_ini
 * @property string|null $num_doc_fin
 * @property string|null $num_aut
 *
 * @package App\Models
 */
class Reg1700 extends Model
{
	protected $table = 'reg_1700';
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
		'cod_disp',
		'cod_mod',
		'ser',
		'sub',
		'num_doc_ini',
		'num_doc_fin',
		'num_aut'
	];
}
