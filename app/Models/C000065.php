<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000065
 * 
 * @property string|null $vencimento
 * @property string|null $data_doc
 * @property string|null $numero_doc
 * @property string|null $especie_doc
 * @property string|null $aceite
 * @property string|null $especie
 * @property string|null $quantidade
 * @property string|null $valor
 * @property string|null $valor_doc
 * @property string|null $desconto
 * @property string|null $outras
 * @property string|null $mora
 * @property string|null $outros
 * @property string|null $valor_cobrado
 * @property string|null $sacado
 * @property string|null $sacado_ender
 * @property string|null $inst_1
 * @property string|null $inst_2
 * @property string|null $inst_3
 * @property string|null $inst_4
 * @property string|null $inst_5
 * @property string|null $inst_6
 * @property string|null $codloja
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000065 extends Model
{
	protected $table = 'c000065';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'vencimento',
		'data_doc',
		'numero_doc',
		'especie_doc',
		'aceite',
		'especie',
		'quantidade',
		'valor',
		'valor_doc',
		'desconto',
		'outras',
		'mora',
		'outros',
		'valor_cobrado',
		'sacado',
		'sacado_ender',
		'inst_1',
		'inst_2',
		'inst_3',
		'inst_4',
		'inst_5',
		'inst_6',
		'codloja',
		'codempresa'
	];
}
