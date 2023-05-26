<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000020
 * 
 * @property string $codigo
 * @property string|null $codsubgrupo
 * @property string|null $numeracao
 * @property int|null $ordem
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000020 extends Model
{
	protected $table = 'c000020';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ordem' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codsubgrupo',
		'numeracao',
		'ordem',
		'codempresa'
	];
}
