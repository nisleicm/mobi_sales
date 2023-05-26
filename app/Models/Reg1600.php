<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg1600
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cod_part
 * @property float|null $tot_credito
 * @property float|null $tot_debito
 *
 * @package App\Models
 */
class Reg1600 extends Model
{
	protected $table = 'reg_1600';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'tot_credito' => 'float',
		'tot_debito' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cod_part',
		'tot_credito',
		'tot_debito'
	];
}
