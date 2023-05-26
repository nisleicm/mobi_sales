<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TabelaPreco
 * 
 * @property int $id
 * @property string|null $cod_produto
 * @property string|null $tipo_tabela
 * @property float|null $quantidade_inicial
 * @property float|null $quantidade_final
 * @property float|null $valor_venda
 * @property Carbon|null $validade_inicio
 * @property Carbon|null $validade_fim
 * @property string|null $codloja
 * @property int|null $id_mob
 * @property Carbon|null $dt_sinc
 * @property string|null $moeda
 * @property float|null $cambio
 * @property Carbon|null $datamov
 * @property int $codempresa
 *
 * @package App\Models
 */
class TabelaPreco extends Model
{
	protected $table = 'tabela_preco';
	public $timestamps = false;

	protected $casts = [
		'quantidade_inicial' => 'float',
		'quantidade_final' => 'float',
		'valor_venda' => 'float',
		'validade_inicio' => 'datetime',
		'validade_fim' => 'datetime',
		'id_mob' => 'int',
		'dt_sinc' => 'datetime',
		'cambio' => 'float',
		'datamov' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'cod_produto',
		'tipo_tabela',
		'quantidade_inicial',
		'quantidade_final',
		'valor_venda',
		'validade_inicio',
		'validade_fim',
		'codloja',
		'id_mob',
		'dt_sinc',
		'moeda',
		'cambio',
		'datamov'
	];
}
