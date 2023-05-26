<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegB500
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property float|null $vl_rec
 * @property string|null $qtd_prof
 * @property float|null $vl_or
 *
 * @package App\Models
 */
class RegB500 extends Model
{
	protected $table = 'reg_b500';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_rec' => 'float',
		'vl_or' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'vl_rec',
		'qtd_prof',
		'vl_or'
	];
}
