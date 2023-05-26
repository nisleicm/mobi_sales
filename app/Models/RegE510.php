<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegE510
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cfop
 * @property string|null $cst_ipi
 * @property float|null $vl_cont_ipi
 * @property float|null $vl_bc_ipi
 * @property float|null $vl_ipi
 *
 * @package App\Models
 */
class RegE510 extends Model
{
	protected $table = 'reg_e510';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_cont_ipi' => 'float',
		'vl_bc_ipi' => 'float',
		'vl_ipi' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cfop',
		'cst_ipi',
		'vl_cont_ipi',
		'vl_bc_ipi',
		'vl_ipi'
	];
}
