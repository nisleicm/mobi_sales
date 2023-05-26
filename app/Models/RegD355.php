<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegD355
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property Carbon|null $dt_doc
 * @property string|null $cro
 * @property string|null $crz
 * @property string|null $num_coo_fin
 * @property float|null $gt_fin
 * @property float|null $vl_brt
 *
 * @package App\Models
 */
class RegD355 extends Model
{
	protected $table = 'reg_d355';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_doc' => 'datetime',
		'gt_fin' => 'float',
		'vl_brt' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'dt_doc',
		'cro',
		'crz',
		'num_coo_fin',
		'gt_fin',
		'vl_brt'
	];
}
