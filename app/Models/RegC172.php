<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC172
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property float|null $vl_bc_issqn
 * @property float|null $aliq_issqn
 * @property float|null $vl_issqn
 *
 * @package App\Models
 */
class RegC172 extends Model
{
	protected $table = 'reg_c172';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_bc_issqn' => 'float',
		'aliq_issqn' => 'float',
		'vl_issqn' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'vl_bc_issqn',
		'aliq_issqn',
		'vl_issqn'
	];
}
