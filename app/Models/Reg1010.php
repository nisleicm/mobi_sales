<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg1010
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $ind_exp
 * @property string|null $ind_ccrf
 * @property string|null $ind_comb
 * @property string|null $ind_usina
 * @property string|null $ind_va
 * @property string|null $ind_ee
 * @property string|null $ind_cart
 * @property string|null $ind_form
 * @property string|null $ind_aer
 * @property string|null $ind_giaf1
 * @property string|null $ind_giaf3
 * @property string|null $ind_giaf4
 * @property string|null $ind_rest_ressarc_compl_icms
 *
 * @package App\Models
 */
class Reg1010 extends Model
{
	protected $table = 'reg_1010';
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
		'ind_exp',
		'ind_ccrf',
		'ind_comb',
		'ind_usina',
		'ind_va',
		'ind_ee',
		'ind_cart',
		'ind_form',
		'ind_aer',
		'ind_giaf1',
		'ind_giaf3',
		'ind_giaf4',
		'ind_rest_ressarc_compl_icms'
	];
}
