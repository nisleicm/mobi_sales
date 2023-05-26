<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cadtanque
 * 
 * @property int $codigo
 * @property int $cod_produto
 * @property int $cap_maxima
 * @property int|null $cap_minima
 * @property int $numero_fisico
 * @property float|null $estoque_inicial
 * @property float|null $estoque_atual
 * @property float|null $estoque_medicao
 * @property float|null $valor_entrada
 * @property float|null $valor_saida
 * @property Carbon|null $data_ult_ent
 * @property Carbon|null $data_ult_sai
 * @property string|null $numero_nf
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class Cadtanque extends Model
{
	protected $table = 'cadtanque';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'cod_produto' => 'int',
		'cap_maxima' => 'int',
		'cap_minima' => 'int',
		'numero_fisico' => 'int',
		'estoque_inicial' => 'float',
		'estoque_atual' => 'float',
		'estoque_medicao' => 'float',
		'valor_entrada' => 'float',
		'valor_saida' => 'float',
		'data_ult_ent' => 'datetime',
		'data_ult_sai' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'cod_produto',
		'cap_maxima',
		'cap_minima',
		'numero_fisico',
		'estoque_inicial',
		'estoque_atual',
		'estoque_medicao',
		'valor_entrada',
		'valor_saida',
		'data_ult_ent',
		'data_ult_sai',
		'numero_nf',
		'codempresa'
	];
}
