<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sc00000
 * 
 * @property string|null $online_offline
 * @property string|null $caixa_atual
 * @property string|null $ecf_modelo
 * @property string|null $ecf_porta
 * @property string|null $cod_caixa_atual
 * @property string|null $utiliza_contas_receber
 * @property string|null $utiliza_lancamento_caixa
 * @property string|null $utiliza_baixa_estoque
 * @property string|null $utiliza_historico_venda
 * @property string|null $balancapdv_modelo
 * @property string|null $balcancapvd_porta
 * @property string|null $impressoracheque_modelo
 * @property string|null $impressoracheque_porta
 * @property string|null $impressora_generica
 * @property int|null $impressora_generica_subir_papel
 * @property int|null $impressora_generica_vias
 * @property int|null $codigo_balanca
 * @property int|null $venda_cadastro_cheque
 * @property int|null $estoque_negativo
 * @property Carbon|null $ultima_carga
 * @property int|null $imprime_cupom_vinculado
 * @property int|null $imprime_produtos_vinculados
 * @property int|null $imprime_comprovante_debito
 * @property string|null $ecf_caixa
 * @property string|null $ecf_serial
 * @property int|null $libera_cancelamentos
 * @property string|null $plano_venda_av
 * @property string|null $plano_venda_ap
 * @property string|null $ultima_carga_hora
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class Sc00000 extends Model
{
	protected $table = 'sc00000';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'impressora_generica_subir_papel' => 'int',
		'impressora_generica_vias' => 'int',
		'codigo_balanca' => 'int',
		'venda_cadastro_cheque' => 'int',
		'estoque_negativo' => 'int',
		'ultima_carga' => 'datetime',
		'imprime_cupom_vinculado' => 'int',
		'imprime_produtos_vinculados' => 'int',
		'imprime_comprovante_debito' => 'int',
		'libera_cancelamentos' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'online_offline',
		'caixa_atual',
		'ecf_modelo',
		'ecf_porta',
		'cod_caixa_atual',
		'utiliza_contas_receber',
		'utiliza_lancamento_caixa',
		'utiliza_baixa_estoque',
		'utiliza_historico_venda',
		'balancapdv_modelo',
		'balcancapvd_porta',
		'impressoracheque_modelo',
		'impressoracheque_porta',
		'impressora_generica',
		'impressora_generica_subir_papel',
		'impressora_generica_vias',
		'codigo_balanca',
		'venda_cadastro_cheque',
		'estoque_negativo',
		'ultima_carga',
		'imprime_cupom_vinculado',
		'imprime_produtos_vinculados',
		'imprime_comprovante_debito',
		'ecf_caixa',
		'ecf_serial',
		'libera_cancelamentos',
		'plano_venda_av',
		'plano_venda_ap',
		'ultima_carga_hora',
		'codempresa'
	];
}
