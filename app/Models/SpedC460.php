<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SpedC460
 * 
 * @property string|null $codigo
 * @property string|null $codc405
 * @property string|null $reg
 * @property string|null $cod_mod
 * @property int|null $cod_sit
 * @property int|null $num_doc
 * @property Carbon|null $dt_doc
 * @property float|null $vl_doc
 * @property float|null $vl_pis
 * @property float|null $vl_cofins
 * @property string|null $cpf_cnpj
 * @property string|null $nom_adq
 * @property int $codempresa
 *
 * @package App\Models
 */
class SpedC460 extends Model
{
	protected $table = 'sped_c460';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'cod_sit' => 'int',
		'num_doc' => 'int',
		'dt_doc' => 'datetime',
		'vl_doc' => 'float',
		'vl_pis' => 'float',
		'vl_cofins' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'codc405',
		'reg',
		'cod_mod',
		'cod_sit',
		'num_doc',
		'dt_doc',
		'vl_doc',
		'vl_pis',
		'vl_cofins',
		'cpf_cnpj',
		'nom_adq',
		'codempresa'
	];
}
