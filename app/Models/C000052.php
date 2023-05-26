<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000052
 * 
 * @property string $codigo
 * @property string|null $setor
 * @property int|null $filtro
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000052 extends Model
{
	protected $table = 'c000052';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'filtro' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'setor',
		'filtro',
		'codempresa'
	];
}
