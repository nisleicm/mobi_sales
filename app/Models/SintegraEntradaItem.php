<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SintegraEntradaItem
 * 
 * @property string|null $tipo
 * @property string|null $data_emissao
 * @property string|null $nro_serie_eqp
 * @property string|null $nro_ordem_eqp
 * @property string|null $modelo_doc
 * @property string|null $nro_contador_inicio
 * @property string|null $nro_contador_fim
 * @property string|null $nro_contador_z
 * @property string|null $contador_reinicio
 * @property float|null $valor_venda_bruta
 * @property float|null $valor_total_geral
 * @property string|null $brancos
 * @property Carbon|null $datahora_recebimento
 * @property string|null $modelo_nf
 * @property Carbon|null $datahora_ini
 * @property Carbon|null $datahora_fim
 * @property Carbon|null $datahora_emissao
 * @property float|null $total
 * @property float|null $base_calculo
 * @property float|null $base_icms
 * @property float|null $valor_icms
 * @property string|null $notafiscal
 * @property int|null $movimento
 * @property string|null $cod_pedidos
 * @property string|null $num_item
 * @property string|null $cd_produto
 * @property float|null $quantidade
 * @property string|null $cl_fis
 * @property string|null $produto
 * @property string|null $apr_und
 * @property string|null $s_trib
 * @property float|null $aliquota_ipi
 * @property float|null $base_ipi
 * @property float|null $valor_ipi
 * @property float|null $aliquota_icms
 * @property float|null $reducao_base_icms
 * @property float|null $base_icms_subst
 * @property Carbon|null $datahora
 * @property float|null $valor_desconto
 * @property float|null $subtotal
 * @property string|null $cfop
 * @property float|null $outras_ipi
 * @property float|null $isentas_ipi
 * @property float|null $outras_icms
 * @property float|null $isentas_icms
 * @property float|null $ipi_nao_creditado
 * @property float|null $frete
 * @property float|null $seguro
 * @property float|null $outras_despesas
 * @property string|null $tipo_frete
 * @property string|null $codnota
 * @property float|null $item_especial_valor
 * @property float|null $valor_desconto_item
 * @property int $codempresa
 *
 * @package App\Models
 */
class SintegraEntradaItem extends Model
{
	protected $table = 'sintegra_entrada_item';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'valor_venda_bruta' => 'float',
		'valor_total_geral' => 'float',
		'datahora_recebimento' => 'datetime',
		'datahora_ini' => 'datetime',
		'datahora_fim' => 'datetime',
		'datahora_emissao' => 'datetime',
		'total' => 'float',
		'base_calculo' => 'float',
		'base_icms' => 'float',
		'valor_icms' => 'float',
		'movimento' => 'int',
		'quantidade' => 'float',
		'aliquota_ipi' => 'float',
		'base_ipi' => 'float',
		'valor_ipi' => 'float',
		'aliquota_icms' => 'float',
		'reducao_base_icms' => 'float',
		'base_icms_subst' => 'float',
		'datahora' => 'datetime',
		'valor_desconto' => 'float',
		'subtotal' => 'float',
		'outras_ipi' => 'float',
		'isentas_ipi' => 'float',
		'outras_icms' => 'float',
		'isentas_icms' => 'float',
		'ipi_nao_creditado' => 'float',
		'frete' => 'float',
		'seguro' => 'float',
		'outras_despesas' => 'float',
		'item_especial_valor' => 'float',
		'valor_desconto_item' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'tipo',
		'data_emissao',
		'nro_serie_eqp',
		'nro_ordem_eqp',
		'modelo_doc',
		'nro_contador_inicio',
		'nro_contador_fim',
		'nro_contador_z',
		'contador_reinicio',
		'valor_venda_bruta',
		'valor_total_geral',
		'brancos',
		'datahora_recebimento',
		'modelo_nf',
		'datahora_ini',
		'datahora_fim',
		'datahora_emissao',
		'total',
		'base_calculo',
		'base_icms',
		'valor_icms',
		'notafiscal',
		'movimento',
		'cod_pedidos',
		'num_item',
		'cd_produto',
		'quantidade',
		'cl_fis',
		'produto',
		'apr_und',
		's_trib',
		'aliquota_ipi',
		'base_ipi',
		'valor_ipi',
		'aliquota_icms',
		'reducao_base_icms',
		'base_icms_subst',
		'datahora',
		'valor_desconto',
		'subtotal',
		'cfop',
		'outras_ipi',
		'isentas_ipi',
		'outras_icms',
		'isentas_icms',
		'ipi_nao_creditado',
		'frete',
		'seguro',
		'outras_despesas',
		'tipo_frete',
		'codnota',
		'item_especial_valor',
		'valor_desconto_item',
		'codempresa'
	];
}
