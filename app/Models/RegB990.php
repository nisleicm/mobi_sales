<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegB990
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $qtd_lin_b
 *
 * @package App\Models
 */
class RegB990 extends Model
{
	protected $table = 'reg_b990';
	public $timestamps = false;

	protected $casts = [
		'id_pai' => 'int',
		'linha' => 'int'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'qtd_lin_b'
	];
}
