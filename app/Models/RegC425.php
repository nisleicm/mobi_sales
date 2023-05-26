<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC425
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_item
 * @property float|null $qtd
 * @property string|null $unid
 * @property float|null $vl_item
 * @property float|null $vl_pis
 * @property float|null $vl_cofins
 *
 * @package App\Models
 */
class RegC425 extends Model
{
	protected $table = 'reg_c425';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'qtd' => 'float',
		'vl_item' => 'float',
		'vl_pis' => 'float',
		'vl_cofins' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_item',
		'qtd',
		'unid',
		'vl_item',
		'vl_pis',
		'vl_cofins'
	];
}
