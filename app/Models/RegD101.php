<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegD101
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property float|null $vl_fcp_uf_dest
 * @property float|null $vl_icms_uf_dest
 * @property float|null $vl_icms_uf_rem
 *
 * @package App\Models
 */
class RegD101 extends Model
{
	protected $table = 'reg_d101';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_fcp_uf_dest' => 'float',
		'vl_icms_uf_dest' => 'float',
		'vl_icms_uf_rem' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'vl_fcp_uf_dest',
		'vl_icms_uf_dest',
		'vl_icms_uf_rem'
	];
}
