<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FornecedorCodigo
 * 
 * @property string $codfornecedor
 * @property string $codproduto
 * @property string $codigo
 * @property float|null $preco
 * @property int $codempresa
 *
 * @package App\Models
 */
class FornecedorCodigo extends Model
{
	protected $table = 'fornecedor_codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'preco' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codfornecedor',
		'codproduto',
		'codigo',
		'preco',
		'codempresa'
	];
}
