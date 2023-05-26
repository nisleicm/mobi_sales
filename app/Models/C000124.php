<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000124
 * 
 * @property string $codigo
 * @property string|null $cod_venda
 * @property string|null $banco
 * @property string|null $cod_cliente
 * @property Carbon|null $data_venda
 * @property float|null $valor
 * @property float|null $comissao
 * @property float|null $liquido
 * @property Carbon|null $data_recebimento
 * @property Carbon|null $data_baixa
 * @property string|null $situacao
 * @property string|null $tipo
 * @property int|null $parcela
 * @property float|null $valor_total
 * @property string|null $codloja
 * @property string|null $codigo_autorizacao
 * @property string|null $cnpj
 * @property Carbon|null $datamov
 * @property string|null $idmovloja
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000124 extends Model
{
	protected $table = 'c000124';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data_venda' => 'datetime',
		'valor' => 'float',
		'comissao' => 'float',
		'liquido' => 'float',
		'data_recebimento' => 'datetime',
		'data_baixa' => 'datetime',
		'parcela' => 'int',
		'valor_total' => 'float',
		'datamov' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'cod_venda',
		'banco',
		'cod_cliente',
		'data_venda',
		'valor',
		'comissao',
		'liquido',
		'data_recebimento',
		'data_baixa',
		'situacao',
		'tipo',
		'parcela',
		'valor_total',
		'codloja',
		'codigo_autorizacao',
		'cnpj',
		'datamov',
		'idmovloja',
		'codempresa'
	];
}
