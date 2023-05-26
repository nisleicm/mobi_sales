<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC460
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_mod
 * @property string|null $cod_sit
 * @property string|null $num_doc
 * @property Carbon|null $dt_doc
 * @property float|null $vl_doc
 * @property float|null $vl_pis
 * @property float|null $vl_cofins
 * @property string|null $cpf_cnpj
 * @property string|null $nome_adq
 *
 * @package App\Models
 */
class RegC460 extends Model
{
	protected $table = 'reg_c460';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_doc' => 'datetime',
		'vl_doc' => 'float',
		'vl_pis' => 'float',
		'vl_cofins' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_mod',
		'cod_sit',
		'num_doc',
		'dt_doc',
		'vl_doc',
		'vl_pis',
		'vl_cofins',
		'cpf_cnpj',
		'nome_adq'
	];
}
