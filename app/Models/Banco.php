<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Banco
 * 
 * @property int|null $id
 * @property string|null $numero_banco
 * @property string|null $digito_numero_banco
 * @property string|null $nome_banco
 * @property string|null $nome_agencia
 * @property string|null $numero_agencia
 * @property string|null $digito_agencia
 * @property string|null $numero_conta
 * @property string|null $digito_conta
 * @property string|null $ciade_agencia
 * @property string|null $uf_agencia
 * @property int|null $nosso_numero
 * @property string|null $cedente
 * @property string|null $cod_cedente
 * @property int $codempresa
 *
 * @package App\Models
 */
class Banco extends Model
{
	protected $table = 'banco';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'nosso_numero' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'id',
		'numero_banco',
		'digito_numero_banco',
		'nome_banco',
		'nome_agencia',
		'numero_agencia',
		'digito_agencia',
		'numero_conta',
		'digito_conta',
		'ciade_agencia',
		'uf_agencia',
		'nosso_numero',
		'cedente',
		'cod_cedente',
		'codempresa'
	];
}
