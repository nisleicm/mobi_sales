<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegC171
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $num_tanque
 * @property float|null $qtde
 *
 * @package App\Models
 */
class RegC171 extends Model
{
	protected $table = 'reg_c171';
	public $timestamps = false;

	protected $casts = [
		'id_pai' => 'int',
		'linha' => 'int',
		'qtde' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'num_tanque',
		'qtde'
	];
}
