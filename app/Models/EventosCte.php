<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EventosCte
 * 
 * @property int $codigo
 * @property int $numero_cte
 * @property string $chave_cte
 * @property int|null $cstat
 * @property string|null $xmotivo
 * @property int|null $tipo_evento
 * @property string|null $xevento
 * @property int|null $nsequencia_evento
 * @property Carbon|null $dhregevento
 * @property string|null $nprot
 * @property string|null $nome_arquivo
 * @property int $codempresa
 *
 * @package App\Models
 */
class EventosCte extends Model
{
	protected $table = 'eventos_cte';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'numero_cte' => 'int',
		'cstat' => 'int',
		'tipo_evento' => 'int',
		'nsequencia_evento' => 'int',
		'dhregevento' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'numero_cte',
		'chave_cte',
		'cstat',
		'xmotivo',
		'tipo_evento',
		'xevento',
		'nsequencia_evento',
		'dhregevento',
		'nprot',
		'nome_arquivo',
		'codempresa'
	];
}
