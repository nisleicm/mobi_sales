<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Feriado
 * 
 * @property string $data
 * @property string $descricao
 * @property int $codempresa
 *
 * @package App\Models
 */
class Feriado extends Model
{
	protected $table = 'feriados';
	protected $primaryKey = 'data';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'descricao',
		'codempresa'
	];
}
