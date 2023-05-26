<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg1200
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_aj_apur
 * @property float|null $sld_cred
 * @property float|null $cred_apr
 * @property float|null $cred_receb
 * @property float|null $cred_util
 * @property float|null $sld_cred_fim
 *
 * @package App\Models
 */
class Reg1200 extends Model
{
	protected $table = 'reg_1200';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'sld_cred' => 'float',
		'cred_apr' => 'float',
		'cred_receb' => 'float',
		'cred_util' => 'float',
		'sld_cred_fim' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_aj_apur',
		'sld_cred',
		'cred_apr',
		'cred_receb',
		'cred_util',
		'sld_cred_fim'
	];
}
