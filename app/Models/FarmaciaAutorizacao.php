<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FarmaciaAutorizacao
 * 
 * @property string $autorizacao
 * @property Carbon|null $data
 * @property string|null $tipo
 * @property string|null $cnpj
 * @property string|null $plano
 * @property string|null $conveniado
 * @property string|null $convenio
 * @property string|null $ecf
 * @property string|null $cupom
 * @property string|null $codbarra
 * @property float|null $qtde
 * @property float|null $pmc
 * @property float|null $pv
 * @property float|null $desconto
 * @property float|null $comissao
 * @property float|null $pc_vista
 * @property float|null $pc_receber
 * @property float|null $reembolso
 * @property float|null $subsidio
 * @property string|null $codcliente
 * @property string|null $nomecliente
 * @property string|null $crm_medico
 * @property string|null $uf_medico
 * @property int|null $solicitacao
 * @property float|null $qtde_autorizado
 * @property string|null $cpf
 * @property string|null $paciente
 * @property int|null $codconvenio
 * @property string|null $pre_autorizacao
 * @property string|null $lote
 * @property string|null $obs
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class FarmaciaAutorizacao extends Model
{
	protected $table = 'farmacia_autorizacao';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'qtde' => 'float',
		'pmc' => 'float',
		'pv' => 'float',
		'desconto' => 'float',
		'comissao' => 'float',
		'pc_vista' => 'float',
		'pc_receber' => 'float',
		'reembolso' => 'float',
		'subsidio' => 'float',
		'solicitacao' => 'int',
		'qtde_autorizado' => 'float',
		'codconvenio' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'autorizacao',
		'data',
		'tipo',
		'cnpj',
		'plano',
		'conveniado',
		'convenio',
		'ecf',
		'cupom',
		'codbarra',
		'qtde',
		'pmc',
		'pv',
		'desconto',
		'comissao',
		'pc_vista',
		'pc_receber',
		'reembolso',
		'subsidio',
		'codcliente',
		'nomecliente',
		'crm_medico',
		'uf_medico',
		'solicitacao',
		'qtde_autorizado',
		'cpf',
		'paciente',
		'codconvenio',
		'pre_autorizacao',
		'lote',
		'obs',
		'codempresa'
	];
}
