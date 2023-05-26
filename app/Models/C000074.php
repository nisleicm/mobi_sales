<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000074
 * 
 * @property string $codigo
 * @property string|null $codcaixa
 * @property string|null $codvendedor
 * @property Carbon|null $data
 * @property string|null $codcliente
 * @property string|null $obs
 * @property float|null $meio_dinheiro
 * @property float|null $meio_chequeav
 * @property float|null $meio_chequeap
 * @property float|null $meio_cartaocred
 * @property float|null $meio_cartaodeb
 * @property float|null $meio_crediario
 * @property float|null $subtotal
 * @property float|null $desconto
 * @property float|null $acrescimo
 * @property float|null $total
 * @property int|null $cupom_fiscal
 * @property string|null $numero_cupom_fiscal
 * @property string|null $retirado
 * @property int|null $tipo
 * @property float|null $meio_convenio
 * @property string|null $dav
 * @property int|null $situacao
 * @property string|null $dav_anterior
 * @property int $atacado_varejo
 * @property float|null $desconto_nota
 * @property float|null $margem_desconto
 * @property float|null $margem_desconto_nota
 * @property float|null $meio_financeira
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000074 extends Model
{
	protected $table = 'c000074';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'meio_dinheiro' => 'float',
		'meio_chequeav' => 'float',
		'meio_chequeap' => 'float',
		'meio_cartaocred' => 'float',
		'meio_cartaodeb' => 'float',
		'meio_crediario' => 'float',
		'subtotal' => 'float',
		'desconto' => 'float',
		'acrescimo' => 'float',
		'total' => 'float',
		'cupom_fiscal' => 'int',
		'tipo' => 'int',
		'meio_convenio' => 'float',
		'situacao' => 'int',
		'atacado_varejo' => 'int',
		'desconto_nota' => 'float',
		'margem_desconto' => 'float',
		'margem_desconto_nota' => 'float',
		'meio_financeira' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codcaixa',
		'codvendedor',
		'data',
		'codcliente',
		'obs',
		'meio_dinheiro',
		'meio_chequeav',
		'meio_chequeap',
		'meio_cartaocred',
		'meio_cartaodeb',
		'meio_crediario',
		'subtotal',
		'desconto',
		'acrescimo',
		'total',
		'cupom_fiscal',
		'numero_cupom_fiscal',
		'retirado',
		'tipo',
		'meio_convenio',
		'dav',
		'situacao',
		'dav_anterior',
		'atacado_varejo',
		'desconto_nota',
		'margem_desconto',
		'margem_desconto_nota',
		'meio_financeira',
		'codempresa'
	];
}
