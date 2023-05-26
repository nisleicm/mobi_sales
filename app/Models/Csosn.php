<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Csosn
 * 
 * @property string|null $codigo
 * @property string|null $descricao
 * @property string|null $st
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class Csosn extends Model
{
	protected $table = 'csosn';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'descricao',
		'st',
		'codempresa'
	];
}
