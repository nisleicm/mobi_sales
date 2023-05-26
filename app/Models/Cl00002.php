<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cl00002
 * 
 * @property int|null $prestacao
 * @property Carbon|null $vencimento
 * @property float|null $valor
 * @property string|null $documento
 * @property string|null $tipo
 * @property string|null $terminal
 * @property string|null $condpgto
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class Cl00002 extends Model
{
	protected $table = 'cl00002';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'prestacao' => 'int',
		'vencimento' => 'datetime',
		'valor' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'prestacao',
		'vencimento',
		'valor',
		'documento',
		'tipo',
		'terminal',
		'condpgto',
		'codempresa'
	];
}
