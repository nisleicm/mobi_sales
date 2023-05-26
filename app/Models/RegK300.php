<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegK300
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property Carbon|null $dt_prod
 *
 * @package App\Models
 */
class RegK300 extends Model
{
	protected $table = 'reg_k300';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_prod' => 'datetime'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'dt_prod'
	];
}
