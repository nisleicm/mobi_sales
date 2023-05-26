<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AverbacaoSeguro
 * 
 * @property int $id
 * @property int|null $idseguro
 * @property string|null $n_averbacao
 * @property int $codempresa
 *
 * @package App\Models
 */
class AverbacaoSeguro extends Model
{
	protected $table = 'averbacao_seguro';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'idseguro' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'idseguro',
		'n_averbacao'
	];
}
