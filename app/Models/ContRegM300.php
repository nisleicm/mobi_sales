<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegM300
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cod_cont
 * @property float|null $vl_cont_apur_difer
 * @property string|null $nat_cred_desc
 * @property float|null $vl_cred_desc_difer
 * @property float|null $vl_cont_difer_ant
 * @property string|null $per_apur
 * @property Carbon|null $dt_receb
 *
 * @package App\Models
 */
class ContRegM300 extends Model
{
	protected $table = 'cont_reg_m300';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_cont_apur_difer' => 'float',
		'vl_cred_desc_difer' => 'float',
		'vl_cont_difer_ant' => 'float',
		'dt_receb' => 'datetime'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'cod_cont',
		'vl_cont_apur_difer',
		'nat_cred_desc',
		'vl_cred_desc_difer',
		'vl_cont_difer_ant',
		'per_apur',
		'dt_receb'
	];
}
