<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000000
 * 
 * @property string $codigo
 * @property string|null $tabela
 * @property int|null $sequencia
 * @property string|null $teste
 *
 * @package App\Models
 */
class C000000 extends Model
{
	protected $table = 'c000000';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'sequencia' => 'int'
	];

	protected $fillable = [
		'tabela',
		'sequencia',
		'teste'
	];
}
