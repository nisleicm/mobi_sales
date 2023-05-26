<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegK265
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_item
 * @property float|null $qtd_cons
 * @property float|null $qtd_ret
 *
 * @package App\Models
 */
class RegK265 extends Model
{
	protected $table = 'reg_k265';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'qtd_cons' => 'float',
		'qtd_ret' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_item',
		'qtd_cons',
		'qtd_ret'
	];
}
