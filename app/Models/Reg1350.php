<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg1350
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $serie
 * @property string|null $fabricante
 * @property string|null $modelo
 * @property string|null $tipo_medicao
 *
 * @package App\Models
 */
class Reg1350 extends Model
{
	protected $table = 'reg_1350';
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
		'serie',
		'fabricante',
		'modelo',
		'tipo_medicao'
	];
}
