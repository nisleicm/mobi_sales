<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegB420
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property float|null $vl_cont
 * @property float|null $vl_bc_iss
 * @property float|null $aliq_iss
 * @property float|null $vl_isnt_iss
 * @property float|null $vl_iss
 * @property string|null $cod_serv
 *
 * @package App\Models
 */
class RegB420 extends Model
{
	protected $table = 'reg_b420';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_cont' => 'float',
		'vl_bc_iss' => 'float',
		'aliq_iss' => 'float',
		'vl_isnt_iss' => 'float',
		'vl_iss' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'vl_cont',
		'vl_bc_iss',
		'aliq_iss',
		'vl_isnt_iss',
		'vl_iss',
		'cod_serv'
	];
}
