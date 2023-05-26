<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000117
 * 
 * @property string $codigo
 * @property string|null $cod_nota
 * @property Carbon|null $vencimento
 * @property string|null $documento
 * @property float|null $valor
 * @property string|null $numero
 * @property string|null $tipo
 * @property int|null $forma_pgto
 * @property string|null $cnpj_credenciadora
 * @property int|null $tband
 * @property string|null $caut
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000117 extends Model
{
	protected $table = 'c000117';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'vencimento' => 'datetime',
		'valor' => 'float',
		'forma_pgto' => 'int',
		'tband' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'cod_nota',
		'vencimento',
		'documento',
		'valor',
		'numero',
		'tipo',
		'forma_pgto',
		'cnpj_credenciadora',
		'tband',
		'caut',
		'codempresa'
	];
}
