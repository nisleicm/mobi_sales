<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC140
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $ind_emit
 * @property string|null $ind_tit
 * @property string|null $desc_tit
 * @property string|null $num_tit
 * @property string|null $qtd_parc
 * @property float|null $vl_tit
 *
 * @package App\Models
 */
class RegC140 extends Model
{
	protected $table = 'reg_c140';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_tit' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'ind_emit',
		'ind_tit',
		'desc_tit',
		'num_tit',
		'qtd_parc',
		'vl_tit'
	];
}
