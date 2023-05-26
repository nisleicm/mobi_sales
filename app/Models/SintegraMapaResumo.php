<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SintegraMapaResumo
 * 
 * @property Carbon|null $data
 * @property string|null $controle
 * @property float|null $movimento_dia
 * @property float|null $cancelamento
 * @property float|null $desconto
 * @property float|null $valor_contabil
 * @property float|null $isentas
 * @property float|null $nao_tributadas
 * @property float|null $subst_tributaria
 * @property float|null $imposto
 * @property int $codempresa
 *
 * @package App\Models
 */
class SintegraMapaResumo extends Model
{
	protected $table = 'sintegra_mapa_resumo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'movimento_dia' => 'float',
		'cancelamento' => 'float',
		'desconto' => 'float',
		'valor_contabil' => 'float',
		'isentas' => 'float',
		'nao_tributadas' => 'float',
		'subst_tributaria' => 'float',
		'imposto' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'data',
		'controle',
		'movimento_dia',
		'cancelamento',
		'desconto',
		'valor_contabil',
		'isentas',
		'nao_tributadas',
		'subst_tributaria',
		'imposto',
		'codempresa'
	];
}
