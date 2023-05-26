<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SintegraGnre
 * 
 * @property int|null $id
 * @property string $cnpj_subst
 * @property string|null $insc_subst
 * @property Carbon|null $datahora_gnre
 * @property string|null $uf_subst
 * @property string|null $uf_favorecida
 * @property string|null $banco_gnre
 * @property string|null $agencia_gnre
 * @property string|null $nro_gnre
 * @property float|null $valor_gnre
 * @property string|null $data_vencimento
 * @property string|null $mes_ano_referencia
 * @property string|null $nro_convenio
 * @property string|null $cod_sintegra_gnre
 * @property int $codempresa
 *
 * @package App\Models
 */
class SintegraGnre extends Model
{
	protected $table = 'sintegra_gnre';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'datahora_gnre' => 'datetime',
		'valor_gnre' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'id',
		'cnpj_subst',
		'insc_subst',
		'datahora_gnre',
		'uf_subst',
		'uf_favorecida',
		'banco_gnre',
		'agencia_gnre',
		'nro_gnre',
		'valor_gnre',
		'data_vencimento',
		'mes_ano_referencia',
		'nro_convenio',
		'cod_sintegra_gnre',
		'codempresa'
	];
}
