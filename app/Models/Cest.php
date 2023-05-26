<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cest
 * 
 * @property int $codigo
 * @property string $cest
 * @property string|null $ncm
 * @property string|null $descricao
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class Cest extends Model
{
	protected $table = 'cest';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'cest',
		'ncm',
		'descricao',
		'codempresa'
	];
}
