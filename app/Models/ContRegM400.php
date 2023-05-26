<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegM400
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cst_pis
 * @property float|null $vl_tot_rec
 * @property string|null $cod_cta
 * @property string|null $desc_compl
 *
 * @package App\Models
 */
class ContRegM400 extends Model
{
	protected $table = 'cont_reg_m400';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_tot_rec' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'cst_pis',
		'vl_tot_rec',
		'cod_cta',
		'desc_compl'
	];
}
