<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sc00001
 * 
 * @property string|null $cupom
 * @property string|null $item
 * @property string|null $codproduto
 * @property float|null $qtde
 * @property float|null $unitario
 * @property float|null $total
 * @property string|null $produto
 * @property string|null $unidade
 * @property string|null $codaliquota
 * @property int|null $sequencia
 * @property float|null $aliquota
 * @property string|null $cst
 * @property string|null $ecf_serial
 * @property string|null $promocao
 * @property float|null $desconto
 * @property string|null $codvendedor
 * @property string|null $tipo
 * @property int|null $orcamento
 * @property string|null $loja
 * @property int|null $controle
 * @property string|null $cfop
 * @property string|null $codbarra
 * @property string|null $situacao
 * @property float|null $ipi
 * @property float|null $comissao
 * @property int $codempresa
 *
 * @package App\Models
 */
class Sc00001 extends Model
{
	protected $table = 'sc00001';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'qtde' => 'float',
		'unitario' => 'float',
		'total' => 'float',
		'sequencia' => 'int',
		'aliquota' => 'float',
		'desconto' => 'float',
		'orcamento' => 'int',
		'controle' => 'int',
		'ipi' => 'float',
		'comissao' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'cupom',
		'item',
		'codproduto',
		'qtde',
		'unitario',
		'total',
		'produto',
		'unidade',
		'codaliquota',
		'sequencia',
		'aliquota',
		'cst',
		'ecf_serial',
		'promocao',
		'desconto',
		'codvendedor',
		'tipo',
		'orcamento',
		'loja',
		'controle',
		'cfop',
		'codbarra',
		'situacao',
		'ipi',
		'comissao',
		'codempresa'
	];
}
