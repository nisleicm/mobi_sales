<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegM211
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $ind_tip_coop
 * @property float|null $vl_bc_cont_ant_exc_coop
 * @property float|null $vl_exc_coop_ger
 * @property float|null $vl_exc_esp_coop
 * @property float|null $vl_bc_cont
 *
 * @package App\Models
 */
class ContRegM211 extends Model
{
	protected $table = 'cont_reg_m211';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_bc_cont_ant_exc_coop' => 'float',
		'vl_exc_coop_ger' => 'float',
		'vl_exc_esp_coop' => 'float',
		'vl_bc_cont' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'ind_tip_coop',
		'vl_bc_cont_ant_exc_coop',
		'vl_exc_coop_ger',
		'vl_exc_esp_coop',
		'vl_bc_cont'
	];
}
