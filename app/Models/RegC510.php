<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC510
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $num_item
 * @property string|null $cod_item
 * @property string|null $cod_class
 * @property float|null $qtd
 * @property string|null $unid
 * @property float|null $vl_item
 * @property float|null $vl_desc
 * @property string|null $cst_icms
 * @property string|null $cfop
 * @property float|null $vl_bc_icms
 * @property float|null $aliq_icms
 * @property float|null $vl_icms
 * @property float|null $vl_bc_icms_st
 * @property float|null $aliq_st
 * @property float|null $vl_icms_st
 * @property string|null $ind_rec
 * @property string|null $cod_part
 * @property float|null $vl_pis
 * @property float|null $vl_cofins
 * @property string|null $cod_cta
 *
 * @package App\Models
 */
class RegC510 extends Model
{
	protected $table = 'reg_c510';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'qtd' => 'float',
		'vl_item' => 'float',
		'vl_desc' => 'float',
		'vl_bc_icms' => 'float',
		'aliq_icms' => 'float',
		'vl_icms' => 'float',
		'vl_bc_icms_st' => 'float',
		'aliq_st' => 'float',
		'vl_icms_st' => 'float',
		'vl_pis' => 'float',
		'vl_cofins' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'num_item',
		'cod_item',
		'cod_class',
		'qtd',
		'unid',
		'vl_item',
		'vl_desc',
		'cst_icms',
		'cfop',
		'vl_bc_icms',
		'aliq_icms',
		'vl_icms',
		'vl_bc_icms_st',
		'aliq_st',
		'vl_icms_st',
		'ind_rec',
		'cod_part',
		'vl_pis',
		'vl_cofins',
		'cod_cta'
	];
}
