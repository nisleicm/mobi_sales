<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegH010
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_item
 * @property string|null $unid
 * @property float|null $qtd
 * @property float|null $vl_unit
 * @property float|null $vl_item
 * @property string|null $ind_prop
 * @property string|null $cod_part
 * @property string|null $txt_compl
 * @property string|null $cod_cta
 * @property float|null $vl_item_ir
 *
 * @package App\Models
 */
class RegH010 extends Model
{
	protected $table = 'reg_h010';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'qtd' => 'float',
		'vl_unit' => 'float',
		'vl_item' => 'float',
		'vl_item_ir' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_item',
		'unid',
		'qtd',
		'vl_unit',
		'vl_item',
		'ind_prop',
		'cod_part',
		'txt_compl',
		'cod_cta',
		'vl_item_ir'
	];
}
