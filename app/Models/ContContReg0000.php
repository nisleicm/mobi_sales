<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContContReg0000
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_cont_reg
 * @property string|null $cod_ver
 * @property string|null $tipo_escrit
 * @property string|null $ind_sit_esp
 * @property string|null $num_rec_anterior
 * @property Carbon|null $dt_ini
 * @property Carbon|null $dt_fin
 * @property string|null $nome
 * @property string|null $cnpj
 * @property string|null $uf
 * @property string|null $cod_mun
 * @property string|null $suframa
 * @property string|null $ind_nat_pj
 * @property string|null $ind_ativ
 *
 * @package App\Models
 */
class ContContReg0000 extends Model
{
	protected $table = 'cont_cont_reg_0000';
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
		'cont_cont_reg',
		'cod_ver',
		'tipo_escrit',
		'ind_sit_esp',
		'num_rec_anterior',
		'dt_ini',
		'dt_fin',
		'nome',
		'cnpj',
		'uf',
		'cod_mun',
		'suframa',
		'ind_nat_pj',
		'ind_ativ'
	];
}
