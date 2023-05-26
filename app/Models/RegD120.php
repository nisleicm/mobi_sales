<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegD120
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_mun_orig
 * @property string|null $cod_mun_dest
 * @property string|null $veic_id
 * @property string|null $uf_id
 *
 * @package App\Models
 */
class RegD120 extends Model
{
	protected $table = 'reg_d120';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_mun_orig',
		'cod_mun_dest',
		'veic_id',
		'uf_id'
	];
}
