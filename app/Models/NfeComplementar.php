<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NfeComplementar
 * 
 * @property string|null $codigo
 * @property string|null $codnota
 * @property string|null $numnota
 * @property string|null $numnotaref
 * @property Carbon|null $data
 * @property string|null $chave
 * @property int|null $cuf
 * @property string|null $cnpj
 * @property string|null $modelo
 * @property string|null $serie
 * @property int|null $ncoo
 * @property int $tipodoc
 * @property string|null $ie
 * @property int $codempresa
 *
 * @package App\Models
 */
class NfeComplementar extends Model
{
	protected $table = 'nfe_complementar';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'cuf' => 'int',
		'ncoo' => 'int',
		'tipodoc' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'codnota',
		'numnota',
		'numnotaref',
		'data',
		'chave',
		'cuf',
		'cnpj',
		'modelo',
		'serie',
		'ncoo',
		'tipodoc',
		'ie',
		'codempresa'
	];
}
