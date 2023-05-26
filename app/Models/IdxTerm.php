<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class IdxTerm
 * 
 * @property int $codigo
 * @property string $terminal
 * @property string|null $nome_pc
 * @property string|null $ip
 * @property int|null $indice
 * @property Carbon|null $datavenda
 * @property Carbon|null $datacad
 * @property string|null $userlog
 * @property string|null $cod_tipo
 * @property int|null $venda
 * @property int|null $orcamento
 * @property int|null $c_pagar
 * @property int $codempresa
 *
 * @package App\Models
 */
class IdxTerm extends Model
{
	protected $table = 'idx_term';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'indice' => 'int',
		'datavenda' => 'datetime',
		'datacad' => 'datetime',
		'venda' => 'int',
		'orcamento' => 'int',
		'c_pagar' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'terminal',
		'nome_pc',
		'ip',
		'indice',
		'datavenda',
		'datacad',
		'userlog',
		'cod_tipo',
		'venda',
		'orcamento',
		'c_pagar',
		'codempresa'
	];
}
