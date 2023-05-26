<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FarmaciaSngpc
 * 
 * @property string|null $tipo_produto
 * @property string|null $tipo_operacao
 * @property string|null $notafiscal
 * @property string|null $tipo_operacao_nf
 * @property Carbon|null $data_nfiscal
 * @property string|null $cnpj_origem
 * @property string|null $cnpj_destino
 * @property string|null $registro_medicamento
 * @property string|null $lote_medicamento
 * @property float|null $quantidade
 * @property Carbon|null $data
 * @property string|null $tipo_receituario
 * @property string|null $notificacao_medicamento
 * @property Carbon|null $data_prescricao
 * @property string|null $nome_medico
 * @property string|null $numero_registro
 * @property string|null $conselho_profissional
 * @property string|null $uf_conselho
 * @property string|null $comprador
 * @property string|null $tipo_documento
 * @property string|null $numero_documento
 * @property string|null $orgao_expedidor
 * @property string|null $uf_orgao
 * @property string|null $codfornecedor
 * @property string|null $codcliente
 * @property string|null $codproduto
 * @property string|null $motivo_perda
 * @property string|null $codmedico
 * @property string|null $uso_medicamento
 * @property int|null $situacao
 * @property float|null $quantidade_insumo_un
 * @property string|null $unidade_medida
 * @property string|null $unidade_farmacotecnica
 * @property string|null $tipo_transferencia
 * @property string|null $codbarra
 * @property Carbon|null $validade
 * @property float|null $saldo
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class FarmaciaSngpc extends Model
{
	protected $table = 'farmacia_sngpc';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data_nfiscal' => 'datetime',
		'quantidade' => 'float',
		'data' => 'datetime',
		'data_prescricao' => 'datetime',
		'situacao' => 'int',
		'quantidade_insumo_un' => 'float',
		'validade' => 'datetime',
		'saldo' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'tipo_produto',
		'tipo_operacao',
		'notafiscal',
		'tipo_operacao_nf',
		'data_nfiscal',
		'cnpj_origem',
		'cnpj_destino',
		'registro_medicamento',
		'lote_medicamento',
		'quantidade',
		'data',
		'tipo_receituario',
		'notificacao_medicamento',
		'data_prescricao',
		'nome_medico',
		'numero_registro',
		'conselho_profissional',
		'uf_conselho',
		'comprador',
		'tipo_documento',
		'numero_documento',
		'orgao_expedidor',
		'uf_orgao',
		'codfornecedor',
		'codcliente',
		'codproduto',
		'motivo_perda',
		'codmedico',
		'uso_medicamento',
		'situacao',
		'quantidade_insumo_un',
		'unidade_medida',
		'unidade_farmacotecnica',
		'tipo_transferencia',
		'codbarra',
		'validade',
		'saldo',
		'codempresa'
	];
}
