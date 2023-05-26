<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UltEncerrante
 * 
 * @property int $codigo
 * @property Carbon|null $data
 * @property int|null $cod_bico
 * @property int|null $abertura
 * @property int|null $encerramento
 * @property float|null $quantidade
 * @property float|null $afericao
 * @property float|null $preco
 * @property float|null $valor
 * @property int|null $cod_produto
 * @property string|null $situacao
 * @property int|null $atualizado
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class UltEncerrante extends Model
{
	protected $table = 'ult_encerrantes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'data' => 'datetime',
		'cod_bico' => 'int',
		'abertura' => 'int',
		'encerramento' => 'int',
		'quantidade' => 'float',
		'afericao' => 'float',
		'preco' => 'float',
		'valor' => 'float',
		'cod_produto' => 'int',
		'atualizado' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'data',
		'cod_bico',
		'abertura',
		'encerramento',
		'quantidade',
		'afericao',
		'preco',
		'valor',
		'cod_produto',
		'situacao',
		'atualizado',
		'codempresa'
	];
}
