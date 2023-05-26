<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000066
 * 
 * @property string $campo
 * @property int|null $linha
 * @property int|null $coluna
 * @property string|null $codconta
 * @property string|null $codloja
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000066 extends Model
{
	protected $table = 'c000066';
	protected $primaryKey = 'campo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'linha' => 'int',
		'coluna' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'linha',
		'coluna',
		'codconta',
		'codloja',
		'codempresa'
	];
}
