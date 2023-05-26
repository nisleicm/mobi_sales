<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegF010
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cnpj
 *
 * @package App\Models
 */
class ContRegF010 extends Model
{
	protected $table = 'cont_reg_f010';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int'
	];

	protected $fillable = [
		'id',
		'id_pai',
		'linha',
		'cont_reg',
		'cnpj'
	];
}
