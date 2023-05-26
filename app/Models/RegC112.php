<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC112
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_da
 * @property string|null $uf
 * @property string|null $num_da
 * @property string|null $cod_aut
 * @property float|null $vl_da
 * @property Carbon|null $dt_vcto
 * @property Carbon|null $dt_pgto
 *
 * @package App\Models
 */
class RegC112 extends Model
{
	protected $table = 'reg_c112';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_da' => 'float',
		'dt_vcto' => 'datetime',
		'dt_pgto' => 'datetime'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_da',
		'uf',
		'num_da',
		'cod_aut',
		'vl_da',
		'dt_vcto',
		'dt_pgto'
	];
}
