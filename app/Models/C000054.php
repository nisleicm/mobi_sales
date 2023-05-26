<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000054
 * 
 * @property string $codigo
 * @property string|null $nome
 * @property string|null $ano
 * @property string|null $combustivel
 * @property string|null $placa
 * @property string|null $ufplaca
 * @property string|null $cor
 * @property string|null $obs1
 * @property string|null $obs2
 * @property string|null $obs3
 * @property string|null $cidade
 * @property Carbon|null $cota_unica_ipva
 * @property Carbon|null $cota1_ipva
 * @property Carbon|null $cota2_ipva
 * @property Carbon|null $cota3_ipva
 * @property Carbon|null $licenciamento
 * @property Carbon|null $seguro_obrigatorio
 * @property string|null $cod_marca
 * @property string|null $cod_modelo
 * @property string|null $situacao
 * @property string|null $codcliente
 * @property string|null $marca
 * @property string|null $renavam
 * @property float|null $tara
 * @property float|null $capkg
 * @property float|null $capm3
 * @property string|null $cod_cli_proprietario
 * @property string|null $rntrc
 * @property int|null $tprop
 * @property int|null $tpveic
 * @property int|null $tprod
 * @property int|null $tpcar
 * @property int|null $ttpropio
 * @property int|null $propietario
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000054 extends Model
{
	protected $table = 'c000054';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'cota_unica_ipva' => 'datetime',
		'cota1_ipva' => 'datetime',
		'cota2_ipva' => 'datetime',
		'cota3_ipva' => 'datetime',
		'licenciamento' => 'datetime',
		'seguro_obrigatorio' => 'datetime',
		'tara' => 'float',
		'capkg' => 'float',
		'capm3' => 'float',
		'tprop' => 'int',
		'tpveic' => 'int',
		'tprod' => 'int',
		'tpcar' => 'int',
		'ttpropio' => 'int',
		'propietario' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'nome',
		'ano',
		'combustivel',
		'placa',
		'ufplaca',
		'cor',
		'obs1',
		'obs2',
		'obs3',
		'cidade',
		'cota_unica_ipva',
		'cota1_ipva',
		'cota2_ipva',
		'cota3_ipva',
		'licenciamento',
		'seguro_obrigatorio',
		'cod_marca',
		'cod_modelo',
		'situacao',
		'codcliente',
		'marca',
		'renavam',
		'tara',
		'capkg',
		'capm3',
		'cod_cli_proprietario',
		'rntrc',
		'tprop',
		'tpveic',
		'tprod',
		'tpcar',
		'ttpropio',
		'propietario',
		'codempresa'
	];
}
