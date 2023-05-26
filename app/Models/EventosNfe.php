<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EventosNfe
 * 
 * @property int $codigo
 * @property string $codnota
 * @property int|null $tpevento
 * @property Carbon|null $data
 * @property string|null $descricao
 * @property string|null $diretorio_arquivo
 * @property string|null $protocolo
 * @property string|null $chave_nfe
 * @property int $codempresa
 *
 * @package App\Models
 */
class EventosNfe extends Model
{
	protected $table = 'eventos_nfe';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'tpevento' => 'int',
		'data' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codnota',
		'tpevento',
		'data',
		'descricao',
		'diretorio_arquivo',
		'protocolo',
		'chave_nfe',
		'codempresa'
	];
}
