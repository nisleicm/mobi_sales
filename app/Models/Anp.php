<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Anp
 * 
 * @property string|null $codigo
 * @property string|null $descricao
 * @property int $codempresa
 *
 * @package App\Models
 */
class Anp extends Model
{
	protected $table = 'anp';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'descricao',
		'codempresa'
	];
}
