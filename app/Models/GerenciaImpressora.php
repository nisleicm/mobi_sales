<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GerenciaImpressora
 * 
 * @property int $id
 * @property int|null $id_tipo_impressora
 * @property string|null $impressora
 * @property string|null $ativa
 * @property int $codempresa
 *
 * @package App\Models
 */
class GerenciaImpressora extends Model
{
	protected $table = 'gerencia_impressora';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_tipo_impressora' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'id_tipo_impressora',
		'impressora',
		'ativa'
	];
}
