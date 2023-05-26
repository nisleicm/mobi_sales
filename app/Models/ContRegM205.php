<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegM205
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $num_campo
 * @property string|null $cod_rec
 * @property float|null $vl_debito
 *
 * @package App\Models
 */
class ContRegM205 extends Model
{
	protected $table = 'cont_reg_m205';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_debito' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'num_campo',
		'cod_rec',
		'vl_debito'
	];
}
