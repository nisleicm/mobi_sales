<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cl00007
 * 
 * @property string $codigo
 * @property string|null $codbarra
 * @property string|null $produto
 * @property string|null $unidade
 * @property string|null $localizacao
 * @property string|null $complemento
 * @property string|null $aplicacao
 * @property string|null $fornecedor
 * @property string|null $marca
 * @property float|null $estoque
 * @property float|null $preco
 * @property Carbon|null $ultima_compra
 * @property string|null $referencia
 * @property string|null $composicao1
 * @property string|null $composicao2
 * @property int $codempresa
 *
 * @package App\Models
 */
class Cl00007 extends Model
{
	protected $table = 'cl00007';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'estoque' => 'float',
		'preco' => 'float',
		'ultima_compra' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codbarra',
		'produto',
		'unidade',
		'localizacao',
		'complemento',
		'aplicacao',
		'fornecedor',
		'marca',
		'estoque',
		'preco',
		'ultima_compra',
		'referencia',
		'composicao1',
		'composicao2'
	];
}
