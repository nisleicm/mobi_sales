<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg9990
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $qtd_lin_9
 *
 * @package App\Models
 */
class Reg9990 extends Model
{
	protected $table = 'reg_9990';
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
		'qtd_lin_9'
	];
}
