<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegD162
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_mod
 * @property string|null $ser
 * @property string|null $num_doc
 * @property Carbon|null $dt_doc
 * @property float|null $vl_doc
 * @property float|null $vl_merc
 * @property string|null $qtd_vol
 * @property float|null $peso_brt
 * @property float|null $peso_liq
 *
 * @package App\Models
 */
class RegD162 extends Model
{
	protected $table = 'reg_d162';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_doc' => 'datetime',
		'vl_doc' => 'float',
		'vl_merc' => 'float',
		'peso_brt' => 'float',
		'peso_liq' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_mod',
		'ser',
		'num_doc',
		'dt_doc',
		'vl_doc',
		'vl_merc',
		'qtd_vol',
		'peso_brt',
		'peso_liq'
	];
}
