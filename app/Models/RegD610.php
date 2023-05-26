<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegD610
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_class
 * @property string|null $cod_item
 * @property float|null $qtd
 * @property string|null $unid
 * @property float|null $vl_item
 * @property float|null $vl_desc
 * @property string|null $cst_icms
 * @property string|null $cfop
 * @property float|null $aliq_icms
 * @property float|null $vl_bc_icms
 * @property float|null $vl_icms
 * @property float|null $vl_bc_icms_st
 * @property float|null $vl_icms_st
 * @property float|null $vl_red_bc
 * @property float|null $vl_pis
 * @property float|null $vl_cofins
 * @property string|null $cod_cta
 *
 * @package App\Models
 */
class RegD610 extends Model
{
	protected $table = 'reg_d610';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'qtd' => 'float',
		'vl_item' => 'float',
		'vl_desc' => 'float',
		'aliq_icms' => 'float',
		'vl_bc_icms' => 'float',
		'vl_icms' => 'float',
		'vl_bc_icms_st' => 'float',
		'vl_icms_st' => 'float',
		'vl_red_bc' => 'float',
		'vl_pis' => 'float',
		'vl_cofins' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_class',
		'cod_item',
		'qtd',
		'unid',
		'vl_item',
		'vl_desc',
		'cst_icms',
		'cfop',
		'aliq_icms',
		'vl_bc_icms',
		'vl_icms',
		'vl_bc_icms_st',
		'vl_icms_st',
		'vl_red_bc',
		'vl_pis',
		'vl_cofins',
		'cod_cta'
	];
}
