<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC370
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
 * @property float|null $vl_desc
 *
 * @package App\Models
 */
class RegC370 extends Model
{
	protected $table = 'reg_c370';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'qtd' => 'float',
		'vl_item' => 'float',
		'vl_desc' => 'float'
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
		'vl_desc'
	];
}
