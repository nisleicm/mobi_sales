<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cl00004
 * 
 * @property string|null $codproduto
 * @property string|null $produto
 * @property string|null $cf
 * @property string|null $str
 * @property string|null $un
 * @property string|null $qtde
 * @property string|null $unitario
 * @property string|null $total
 * @property string|null $icms
 * @property string|null $ipi
 * @property string|null $ipi_aliquota
 * @property string|null $texto1
 * @property string|null $texto2
 * @property string|null $texto3
 * @property string|null $texto4
 * @property string|null $texto6
 * @property string|null $texto7
 * @property string|null $texto8
 * @property string|null $texto9
 * @property string|null $texto10
 * @property string|null $classificacao_fiscal
 * @property int $codempresa
 *
 * @package App\Models
 */
class Cl00004 extends Model
{
	protected $table = 'cl00004';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codproduto',
		'produto',
		'cf',
		'str',
		'un',
		'qtde',
		'unitario',
		'total',
		'icms',
		'ipi',
		'ipi_aliquota',
		'texto1',
		'texto2',
		'texto3',
		'texto4',
		'texto6',
		'texto7',
		'texto8',
		'texto9',
		'texto10',
		'classificacao_fiscal',
		'codempresa'
	];
}
