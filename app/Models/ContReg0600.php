<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContReg0600
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property Carbon|null $dt_alt
 * @property string|null $cod_ccus
 * @property string|null $ccus
 *
 * @package App\Models
 */
class ContReg0600 extends Model
{
	protected $table = 'cont_reg_0600';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_alt' => 'datetime'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'dt_alt',
		'cod_ccus',
		'ccus'
	];
}
