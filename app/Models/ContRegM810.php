<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegM810
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $nat_rec
 * @property float|null $vl_rec
 * @property string|null $cod_cta
 * @property string|null $desc_compl
 *
 * @package App\Models
 */
class ContRegM810 extends Model
{
	protected $table = 'cont_reg_m810';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_rec' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'nat_rec',
		'vl_rec',
		'cod_cta',
		'desc_compl'
	];
}
