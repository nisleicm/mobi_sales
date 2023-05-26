<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000119
 * 
 * @property string $codigo
 * @property string|null $codbarra
 * @property string|null $produto
 * @property string|null $unidade
 * @property Carbon|null $data_cadastro
 * @property string|null $codgrupo
 * @property string|null $codsubgrupo
 * @property string|null $codfornecedor
 * @property string|null $codmarca
 * @property Carbon|null $data_ultimacompra
 * @property string|null $notafiscal
 * @property float|null $precocusto
 * @property float|null $precovenda
 * @property Carbon|null $data_ultimavenda
 * @property float|null $estoque
 * @property float|null $estoqueminimo
 * @property string|null $codaliquota
 * @property string|null $aplicacao
 * @property string|null $localicazao
 * @property float|null $peso
 * @property string|null $validade
 * @property float|null $comissao
 * @property int|null $usa_balanca
 * @property int|null $usa_serial
 * @property int|null $usa_grade
 * @property string|null $codreceita
 * @property string|null $foto
 * @property Carbon|null $data_ultimacompra_anterior
 * @property string|null $notafiscal_anterior
 * @property string|null $codfornecedor_anterior
 * @property float|null $precocusto_anterior
 * @property float|null $precovenda_anterior
 * @property float|null $customedio
 * @property string|null $auto_aplicacao
 * @property string|null $auto_complemento
 * @property Carbon|null $data_remarcacao_custo
 * @property Carbon|null $data_remarcacao_venda
 * @property float|null $preco_promocao
 * @property Carbon|null $data_promocao
 * @property Carbon|null $fim_promocao
 * @property string|null $cst
 * @property string|null $classificacao_fiscal
 * @property string|null $nbm
 * @property string|null $ncm
 * @property float|null $aliquota
 * @property float|null $ipi
 * @property float|null $reducao
 * @property float|null $qtde_embalagem
 * @property string|null $tipo
 * @property float|null $peso_liquido
 * @property string|null $farmacia_controlado
 * @property int|null $farmacia_apresentacao
 * @property string|null $farmacia_registro_medicamento
 * @property float|null $farmacia_pmc
 * @property Carbon|null $ultima_alteracao
 * @property Carbon|null $ultima_carga
 * @property Carbon|null $data_inventario
 * @property float|null $custo_inventario
 * @property float|null $estoque_inventario
 * @property float|null $estoque_anterior
 * @property float|null $precovenda_novo
 * @property int|null $usa_rentabilidade
 * @property float|null $quantidade_minima_fab
 * @property string|null $apresentacao
 * @property int|null $situacao
 * @property float|null $margem_minima
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000119 extends Model
{
	protected $table = 'c000119';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data_cadastro' => 'datetime',
		'data_ultimacompra' => 'datetime',
		'precocusto' => 'float',
		'precovenda' => 'float',
		'data_ultimavenda' => 'datetime',
		'estoque' => 'float',
		'estoqueminimo' => 'float',
		'peso' => 'float',
		'comissao' => 'float',
		'usa_balanca' => 'int',
		'usa_serial' => 'int',
		'usa_grade' => 'int',
		'data_ultimacompra_anterior' => 'datetime',
		'precocusto_anterior' => 'float',
		'precovenda_anterior' => 'float',
		'customedio' => 'float',
		'data_remarcacao_custo' => 'datetime',
		'data_remarcacao_venda' => 'datetime',
		'preco_promocao' => 'float',
		'data_promocao' => 'datetime',
		'fim_promocao' => 'datetime',
		'aliquota' => 'float',
		'ipi' => 'float',
		'reducao' => 'float',
		'qtde_embalagem' => 'float',
		'peso_liquido' => 'float',
		'farmacia_apresentacao' => 'int',
		'farmacia_pmc' => 'float',
		'ultima_alteracao' => 'datetime',
		'ultima_carga' => 'datetime',
		'data_inventario' => 'datetime',
		'custo_inventario' => 'float',
		'estoque_inventario' => 'float',
		'estoque_anterior' => 'float',
		'precovenda_novo' => 'float',
		'usa_rentabilidade' => 'int',
		'quantidade_minima_fab' => 'float',
		'situacao' => 'int',
		'margem_minima' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codbarra',
		'produto',
		'unidade',
		'data_cadastro',
		'codgrupo',
		'codsubgrupo',
		'codfornecedor',
		'codmarca',
		'data_ultimacompra',
		'notafiscal',
		'precocusto',
		'precovenda',
		'data_ultimavenda',
		'estoque',
		'estoqueminimo',
		'codaliquota',
		'aplicacao',
		'localicazao',
		'peso',
		'validade',
		'comissao',
		'usa_balanca',
		'usa_serial',
		'usa_grade',
		'codreceita',
		'foto',
		'data_ultimacompra_anterior',
		'notafiscal_anterior',
		'codfornecedor_anterior',
		'precocusto_anterior',
		'precovenda_anterior',
		'customedio',
		'auto_aplicacao',
		'auto_complemento',
		'data_remarcacao_custo',
		'data_remarcacao_venda',
		'preco_promocao',
		'data_promocao',
		'fim_promocao',
		'cst',
		'classificacao_fiscal',
		'nbm',
		'ncm',
		'aliquota',
		'ipi',
		'reducao',
		'qtde_embalagem',
		'tipo',
		'peso_liquido',
		'farmacia_controlado',
		'farmacia_apresentacao',
		'farmacia_registro_medicamento',
		'farmacia_pmc',
		'ultima_alteracao',
		'ultima_carga',
		'data_inventario',
		'custo_inventario',
		'estoque_inventario',
		'estoque_anterior',
		'precovenda_novo',
		'usa_rentabilidade',
		'quantidade_minima_fab',
		'apresentacao',
		'situacao',
		'margem_minima'
	];
}
