<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000060
 * 
 * @property string|null $codorcamento
 * @property int|null $prestacao
 * @property float|null $valor
 * @property string|null $documento
 * @property string|null $tipo
 * @property Carbon|null $vencimento
 * @property string|null $codloja
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000060 extends Model
{
	protected $table = 'c000060';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'prestacao' => 'int',
		'valor' => 'float',
		'vencimento' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codorcamento',
		'prestacao',
		'valor',
		'documento',
		'tipo',
		'vencimento',
		'codloja',
		'codempresa'
	];
}
