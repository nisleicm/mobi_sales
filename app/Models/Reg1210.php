<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg1210
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $tipo_util
 * @property string|null $nr_doc
 * @property float|null $vl_cred_util
 * @property string|null $chv_doce
 *
 * @package App\Models
 */
class Reg1210 extends Model
{
	protected $table = 'reg_1210';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_cred_util' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'tipo_util',
		'nr_doc',
		'vl_cred_util',
		'chv_doce'
	];
}
