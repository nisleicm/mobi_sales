<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegE500
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $ind_apur
 * @property Carbon|null $dt_ini
 * @property Carbon|null $dt_fin
 *
 * @package App\Models
 */
class RegE500 extends Model
{
	protected $table = 'reg_e500';
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
		'ind_apur',
		'dt_ini',
		'dt_fin'
	];
}
