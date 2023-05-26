<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SpedC490
 * 
 * @property string|null $codigo
 * @property string|null $codc405
 * @property string|null $reg
 * @property string|null $cst_icms
 * @property string|null $cfop
 * @property float|null $aliq_icms
 * @property float|null $vl_opr
 * @property float|null $vl_bc_icms
 * @property float|null $vl_icms
 * @property string|null $cod_obs
 * @property int $codempresa
 *
 * @package App\Models
 */
class SpedC490 extends Model
{
	protected $table = 'sped_c490';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'aliq_icms' => 'float',
		'vl_opr' => 'float',
		'vl_bc_icms' => 'float',
		'vl_icms' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'codc405',
		'reg',
		'cst_icms',
		'cfop',
		'aliq_icms',
		'vl_opr',
		'vl_bc_icms',
		'vl_icms',
		'cod_obs',
		'codempresa'
	];
}
