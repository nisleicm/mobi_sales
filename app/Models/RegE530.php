<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegE530
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $ind_aj
 * @property float|null $vl_aj
 * @property string|null $cod_aj
 * @property string|null $ind_doc
 * @property string|null $num_doc
 * @property string|null $descr_aj
 *
 * @package App\Models
 */
class RegE530 extends Model
{
	protected $table = 'reg_e530';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_aj' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'ind_aj',
		'vl_aj',
		'cod_aj',
		'ind_doc',
		'num_doc',
		'descr_aj'
	];
}
