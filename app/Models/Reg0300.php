<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg0300
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_ind_bem
 * @property string|null $ident_merc
 * @property string|null $descr_item
 * @property string|null $cod_prnc
 * @property string|null $cod_cta
 * @property string|null $nr_parc
 *
 * @package App\Models
 */
class Reg0300 extends Model
{
	protected $table = 'reg_0300';
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
		'cod_ind_bem',
		'ident_merc',
		'descr_item',
		'cod_prnc',
		'cod_cta',
		'nr_parc'
	];
}
