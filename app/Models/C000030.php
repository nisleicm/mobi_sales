<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000030
 * 
 * @property string $cfop
 * @property string|null $natureza
 * @property int|null $tipo
 * @property float|null $icms
 * @property float|null $iss
 * @property string|null $obs1
 * @property string|null $obs2
 * @property string|null $obs3
 * @property string|null $obs4
 * @property int|null $filtro
 * @property float|null $valor1
 * @property float|null $valor2
 * @property float|null $valor3
 * @property float|null $valor4
 * @property float|null $valor5
 * @property float|null $valor6
 * @property float|null $valor7
 * @property float|null $valor8
 * @property float|null $valor9
 * @property float|null $valor10
 * @property string|null $st
 * @property string|null $classificacao_fiscal
 * @property float|null $reducao_icms
 * @property float|null $margem_agregada
 * @property string|null $simplificado
 * @property int|null $caixa
 * @property int|null $faturamento
 * @property int $cod_nat
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class C000030 extends Model
{
	protected $table = 'c000030';
	protected $primaryKey = 'cfop';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tipo' => 'int',
		'icms' => 'float',
		'iss' => 'float',
		'filtro' => 'int',
		'valor1' => 'float',
		'valor2' => 'float',
		'valor3' => 'float',
		'valor4' => 'float',
		'valor5' => 'float',
		'valor6' => 'float',
		'valor7' => 'float',
		'valor8' => 'float',
		'valor9' => 'float',
		'valor10' => 'float',
		'reducao_icms' => 'float',
		'margem_agregada' => 'float',
		'caixa' => 'int',
		'faturamento' => 'int',
		'cod_nat' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'natureza',
		'tipo',
		'icms',
		'iss',
		'obs1',
		'obs2',
		'obs3',
		'obs4',
		'filtro',
		'valor1',
		'valor2',
		'valor3',
		'valor4',
		'valor5',
		'valor6',
		'valor7',
		'valor8',
		'valor9',
		'valor10',
		'st',
		'classificacao_fiscal',
		'reducao_icms',
		'margem_agregada',
		'simplificado',
		'caixa',
		'faturamento',
		'cod_nat',
		'codempresa'
	];
}
