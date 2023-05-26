<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC175
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $ind_veic_oper
 * @property string|null $cnpj
 * @property string|null $uf
 * @property string|null $chassi_veic
 *
 * @package App\Models
 */
class RegC175 extends Model
{
	protected $table = 'reg_c175';
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
		'ind_veic_oper',
		'cnpj',
		'uf',
		'chassi_veic'
	];
}
