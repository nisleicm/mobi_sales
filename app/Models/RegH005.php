<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegH005
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property Carbon|null $dt_inv
 * @property float|null $vl_inv
 * @property string|null $mot_inv
 *
 * @package App\Models
 */
class RegH005 extends Model
{
	protected $table = 'reg_h005';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_inv' => 'datetime',
		'vl_inv' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'dt_inv',
		'vl_inv',
		'mot_inv'
	];
}
