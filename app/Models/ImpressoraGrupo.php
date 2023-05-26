<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ImpressoraGrupo
 * 
 * @property int $codimpressora
 * @property string|null $codgrupo
 * @property int $codempresa
 *
 * @package App\Models
 */
class ImpressoraGrupo extends Model
{
	protected $table = 'impressora_grupo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codimpressora' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codgrupo'
	];
}
