<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC810
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $num_item
 * @property string|null $cod_item
 * @property float|null $qtd
 * @property string|null $unid
 * @property float|null $vl_item
 * @property string|null $cst_icms
 * @property string|null $cfop
 *
 * @package App\Models
 */
class RegC810 extends Model
{
	protected $table = 'reg_c810';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'qtd' => 'float',
		'vl_item' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'num_item',
		'cod_item',
		'qtd',
		'unid',
		'vl_item',
		'cst_icms',
		'cfop'
	];
}
