<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Extra
 * 
 * @property string|null $descricao
 * @property float|null $valor
 * @property int $id
 * @property string|null $fotobd
 * @property int $codempresa
 *
 * @package App\Models
 */
class Extra extends Model
{
	protected $table = 'extras';
	public $timestamps = false;

	protected $casts = [
		'valor' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'descricao',
		'valor',
		'fotobd',
		'codempresa'
	];
}
