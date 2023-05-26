<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000132
 * 
 * @property int $id
 * @property string|null $dia
 * @property string|null $horario
 * @property string|null $ip
 * @property string|null $basedados
 * @property string|null $arquivosalvo
 * @property string|null $descricao
 * @property string|null $destino
 * @property string|null $arquivonuven
 * @property string|null $arquivocopiabanco
 * @property Carbon|null $datamov
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class C000132 extends Model
{
	protected $table = 'c000132';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'datamov' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'dia',
		'horario',
		'ip',
		'basedados',
		'arquivosalvo',
		'descricao',
		'destino',
		'arquivonuven',
		'arquivocopiabanco',
		'datamov',
		'codempresa'
	];
}
