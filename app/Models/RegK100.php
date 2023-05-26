<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegK100
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property Carbon|null $dt_ini
 * @property Carbon|null $dt_fin
 *
 * @package App\Models
 */
class RegK100 extends Model
{
	protected $table = 'reg_k100';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_ini' => 'datetime',
		'dt_fin' => 'datetime'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'dt_ini',
		'dt_fin'
	];
}
