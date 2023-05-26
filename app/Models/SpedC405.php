<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SpedC405
 * 
 * @property string|null $codigo
 * @property string|null $codecf
 * @property string|null $reg
 * @property Carbon|null $dt_doc
 * @property int|null $cro
 * @property int|null $crz
 * @property int|null $num_coo_fin
 * @property float|null $gt_ffin
 * @property float|null $vl_brt
 * @property int $codempresa
 *
 * @package App\Models
 */
class SpedC405 extends Model
{
	protected $table = 'sped_c405';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'dt_doc' => 'datetime',
		'cro' => 'int',
		'crz' => 'int',
		'num_coo_fin' => 'int',
		'gt_ffin' => 'float',
		'vl_brt' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'codecf',
		'reg',
		'dt_doc',
		'cro',
		'crz',
		'num_coo_fin',
		'gt_ffin',
		'vl_brt',
		'codempresa'
	];
}
