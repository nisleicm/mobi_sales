<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegB510
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $ind_prof
 * @property string|null $ind_esc
 * @property string|null $ind_soc
 * @property string|null $cpf
 * @property string|null $nome
 *
 * @package App\Models
 */
class RegB510 extends Model
{
	protected $table = 'reg_b510';
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
		'ind_prof',
		'ind_esc',
		'ind_soc',
		'cpf',
		'nome'
	];
}
