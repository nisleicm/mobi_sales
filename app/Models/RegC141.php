<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC141
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $num_parc
 * @property Carbon|null $dt_vcto
 * @property float|null $vl_parc
 *
 * @package App\Models
 */
class RegC141 extends Model
{
	protected $table = 'reg_c141';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_vcto' => 'datetime',
		'vl_parc' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'num_parc',
		'dt_vcto',
		'vl_parc'
	];
}
