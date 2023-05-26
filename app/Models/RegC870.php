<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC870
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_item
 * @property float|null $qtd
 * @property string|null $unid
 * @property string|null $cst_icms
 * @property string|null $cfop
 *
 * @package App\Models
 */
class RegC870 extends Model
{
	protected $table = 'reg_c870';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'qtd' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_item',
		'qtd',
		'unid',
		'cst_icms',
		'cfop'
	];
}
