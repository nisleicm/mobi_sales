<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg0000
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_ver
 * @property string|null $cod_fin
 * @property Carbon|null $dt_ini
 * @property Carbon|null $dt_fin
 * @property string|null $nome
 * @property string|null $cnpj
 * @property string|null $cpf
 * @property string|null $uf
 * @property string|null $ie
 * @property string|null $cod_mun
 * @property string|null $im
 * @property string|null $suframa
 * @property string|null $ind_perfil
 * @property string|null $ind_ativ
 *
 * @package App\Models
 */
class Reg0000 extends Model
{
	protected $table = 'reg_0000';
	public $timestamps = false;

	protected $casts = [
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_ini' => 'datetime',
		'dt_fin' => 'datetime'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_ver',
		'cod_fin',
		'dt_ini',
		'dt_fin',
		'nome',
		'cnpj',
		'cpf',
		'uf',
		'ie',
		'cod_mun',
		'im',
		'suframa',
		'ind_perfil',
		'ind_ativ'
	];
}
