<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000013
 * 
 * @property string $numero
 * @property string|null $banco
 * @property string|null $logo
 * @property int|null $cartao_credito
 * @property int|null $financeira
 * @property int|null $ressarcimento
 * @property int|null $prazo
 * @property float|null $comissao_credito
 * @property float|null $comissao_debito
 * @property int|null $rec_debito
 * @property int|null $rec_credito
 * @property string|null $conta_padrao
 * @property string|null $titular_conta_padrao
 * @property string|null $digito
 * @property string|null $administradora
 * @property string|null $cnpj_administradora
 * @property string|null $cod_adm_cartao_sat
 * @property string|null $path_logotipo
 * @property string|null $layout_remessa
 * @property int|null $tamanho_nosso_numero
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000013 extends Model
{
	protected $table = 'c000013';
	protected $primaryKey = 'numero';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'cartao_credito' => 'int',
		'financeira' => 'int',
		'ressarcimento' => 'int',
		'prazo' => 'int',
		'comissao_credito' => 'float',
		'comissao_debito' => 'float',
		'rec_debito' => 'int',
		'rec_credito' => 'int',
		'tamanho_nosso_numero' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'banco',
		'logo',
		'cartao_credito',
		'financeira',
		'ressarcimento',
		'prazo',
		'comissao_credito',
		'comissao_debito',
		'rec_debito',
		'rec_credito',
		'conta_padrao',
		'titular_conta_padrao',
		'digito',
		'administradora',
		'cnpj_administradora',
		'cod_adm_cartao_sat',
		'path_logotipo',
		'layout_remessa',
		'tamanho_nosso_numero',
		'codempresa'
	];
}
