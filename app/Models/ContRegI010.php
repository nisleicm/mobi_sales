<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegI010
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cnpj
 * @property string|null $ind_ativ
 * @property string|null $info_compl
 *
 * @package App\Models
 */
class ContRegI010 extends Model
{
	protected $table = 'cont_reg_i010';
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
		'cnpj',
		'ind_ativ',
		'info_compl'
	];
}
