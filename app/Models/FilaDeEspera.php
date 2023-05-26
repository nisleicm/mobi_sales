<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FilaDeEspera
 * 
 * @property int $codigo
 * @property string|null $codcliente
 * @property Carbon|null $entrada_na_espera
 * @property int|null $qtde_pessoas
 * @property int|null $prioridade
 * @property int $num_espediente
 * @property Carbon|null $saida_da_espera
 * @property string|null $nome_cliente
 * @property int $codempresa
 *
 * @package App\Models
 */
class FilaDeEspera extends Model
{
	protected $table = 'fila_de_espera';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'entrada_na_espera' => 'datetime',
		'qtde_pessoas' => 'int',
		'prioridade' => 'int',
		'num_espediente' => 'int',
		'saida_da_espera' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codcliente',
		'entrada_na_espera',
		'qtde_pessoas',
		'prioridade',
		'num_espediente',
		'saida_da_espera',
		'nome_cliente',
		'codempresa'
	];
}
