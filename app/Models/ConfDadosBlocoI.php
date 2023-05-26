<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ConfDadosBlocoI
 * 
 * @property int $id_esct
 * @property string $ind_ativ
 * @property string $cnpj
 * @property string $cst
 * @property string $num_campo
 * @property string $cod_det
 * @property string $cod_comp
 * @property string|null $cod_cta
 * @property float $vlr_comp
 * @property string|null $inf_comp
 *
 * @package App\Models
 */
class ConfDadosBlocoI extends Model
{
	protected $table = 'conf_dados_bloco_i';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_esct' => 'int',
		'vlr_comp' => 'float'
	];

	protected $fillable = [
		'id_esct',
		'ind_ativ',
		'cnpj',
		'cst',
		'num_campo',
		'cod_det',
		'cod_comp',
		'cod_cta',
		'vlr_comp',
		'inf_comp'
	];
}
