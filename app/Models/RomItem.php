<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RomItem
 * 
 * @property int $codigo
 * @property string|null $codvendedor
 * @property string|null $placa
 * @property Carbon|null $data
 * @property Carbon|null $hora
 * @property string|null $codproduto
 * @property string|null $descricao
 * @property float|null $qtdepc
 * @property float|null $qtdekg
 * @property string|null $unid
 * @property float|null $custo
 * @property float|null $valor
 * @property float|null $qtde_perda
 * @property float|null $qtde_devolucao
 * @property string|null $status
 * @property int|null $tipo
 * @property string|null $obs
 * @property string|null $codcliente
 * @property string|null $gtin
 * @property int|null $agrupa
 * @property string|null $gtingrupo
 * @property Carbon|null $previsao_data
 * @property int $codrom
 * @property int|null $libera
 * @property string|null $codorc
 * @property string|null $codped
 * @property int|null $faturado
 * @property int|null $marca
 *
 * @package App\Models
 */
class RomItem extends Model
{
	protected $table = 'rom_item';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'data' => 'datetime',
		'hora' => 'datetime',
		'qtdepc' => 'float',
		'qtdekg' => 'float',
		'custo' => 'float',
		'valor' => 'float',
		'qtde_perda' => 'float',
		'qtde_devolucao' => 'float',
		'tipo' => 'int',
		'agrupa' => 'int',
		'previsao_data' => 'datetime',
		'codrom' => 'int',
		'libera' => 'int',
		'faturado' => 'int',
		'marca' => 'int'
	];

	protected $fillable = [
		'codigo',
		'codvendedor',
		'placa',
		'data',
		'hora',
		'codproduto',
		'descricao',
		'qtdepc',
		'qtdekg',
		'unid',
		'custo',
		'valor',
		'qtde_perda',
		'qtde_devolucao',
		'status',
		'tipo',
		'obs',
		'codcliente',
		'gtin',
		'agrupa',
		'gtingrupo',
		'previsao_data',
		'codrom',
		'libera',
		'codorc',
		'codped',
		'faturado',
		'marca'
	];
}
