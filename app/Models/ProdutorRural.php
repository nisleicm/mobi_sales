<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProdutorRural
 * 
 * @property int $codigo
 * @property string $codcliente
 * @property string|null $nome
 * @property string|null $uf
 * @property string|null $ie
 * @property string|null $cei
 * @property int $codempresa
 *
 * @package App\Models
 */
class ProdutorRural extends Model
{
	protected $table = 'produtor_rural';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codcliente',
		'nome',
		'uf',
		'ie',
		'cei',
		'codempresa'
	];
}
