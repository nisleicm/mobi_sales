<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FreteCarga
 * 
 * @property int $codigo
 * @property string $codtransp
 * @property string|null $desc_veiculo
 * @property float|null $volume
 * @property float|null $peso
 * @property float|null $altura
 * @property float|null $comprimento
 * @property string|null $status
 * @property Carbon|null $data
 * @property float|null $custo_frete
 * @property float|null $custo_regiao
 * @property float|null $custo_volume
 * @property float|null $tara
 * @property string|null $grupo_frete
 * @property string|null $obs
 * @property string|null $regiao
 * @property float|null $unidade
 * @property float|null $pecas
 * @property float|null $grupo
 * @property float|null $carga
 * @property int|null $tipo
 *
 * @package App\Models
 */
class FreteCarga extends Model
{
	protected $table = 'frete_carga';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'volume' => 'float',
		'peso' => 'float',
		'altura' => 'float',
		'comprimento' => 'float',
		'data' => 'datetime',
		'custo_frete' => 'float',
		'custo_regiao' => 'float',
		'custo_volume' => 'float',
		'tara' => 'float',
		'unidade' => 'float',
		'pecas' => 'float',
		'grupo' => 'float',
		'carga' => 'float',
		'tipo' => 'int'
	];

	protected $fillable = [
		'codtransp',
		'desc_veiculo',
		'volume',
		'peso',
		'altura',
		'comprimento',
		'status',
		'data',
		'custo_frete',
		'custo_regiao',
		'custo_volume',
		'tara',
		'grupo_frete',
		'obs',
		'regiao',
		'unidade',
		'pecas',
		'grupo',
		'carga',
		'tipo'
	];
}
