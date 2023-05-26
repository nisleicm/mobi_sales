<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class R000004
 * 
 * @property int|null $codigo
 * @property string|null $codpro
 * @property float|null $qtde
 * @property int $codempresa
 *
 * @package App\Models
 */
class R000004 extends Model
{
	protected $table = 'r000004';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'qtde' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'codpro',
		'qtde',
		'codempresa'
	];
}
