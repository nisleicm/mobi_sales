<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg9900
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $reg_blc
 * @property string|null $qtd_reg_blc
 *
 * @package App\Models
 */
class Reg9900 extends Model
{
	protected $table = 'reg_9900';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int'
	];

	protected $fillable = [
		'id',
		'id_pai',
		'linha',
		'reg',
		'reg_blc',
		'qtd_reg_blc'
	];
}
