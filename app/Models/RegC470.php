<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC470
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_item
 * @property float|null $qtd
 * @property float|null $qtd_canc
 * @property string|null $unid
 * @property float|null $vl_item
 * @property string|null $cst_icms
 * @property string|null $cfop
 * @property float|null $aliq_icms
 * @property float|null $vl_pis
 * @property float|null $vl_cofins
 *
 * @package App\Models
 */
class RegC470 extends Model
{
	protected $table = 'reg_c470';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'qtd' => 'float',
		'qtd_canc' => 'float',
		'vl_item' => 'float',
		'aliq_icms' => 'float',
		'vl_pis' => 'float',
		'vl_cofins' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_item',
		'qtd',
		'qtd_canc',
		'unid',
		'vl_item',
		'cst_icms',
		'cfop',
		'aliq_icms',
		'vl_pis',
		'vl_cofins'
	];
}
