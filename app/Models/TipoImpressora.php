<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoImpressora
 * 
 * @property int $id
 * @property string|null $descricao
 * @property int $codempresa
 *
 * @package App\Models
 */
class TipoImpressora extends Model
{
	protected $table = 'tipo_impressora';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'descricao'
	];
}
