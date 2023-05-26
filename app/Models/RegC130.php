<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC130
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property float|null $vl_serv_nt
 * @property float|null $vl_bc_issqn
 * @property float|null $vl_issqn
 * @property float|null $vl_bc_irrf
 * @property float|null $vl_irrf
 * @property float|null $vl_bc_prev
 * @property float|null $vl_prev
 *
 * @package App\Models
 */
class RegC130 extends Model
{
	protected $table = 'reg_c130';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_serv_nt' => 'float',
		'vl_bc_issqn' => 'float',
		'vl_issqn' => 'float',
		'vl_bc_irrf' => 'float',
		'vl_irrf' => 'float',
		'vl_bc_prev' => 'float',
		'vl_prev' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'vl_serv_nt',
		'vl_bc_issqn',
		'vl_issqn',
		'vl_bc_irrf',
		'vl_irrf',
		'vl_bc_prev',
		'vl_prev'
	];
}
