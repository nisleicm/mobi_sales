<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ValorTamanhoProd
 * 
 * @property int $codigo
 * @property string|null $codproduto
 * @property string|null $codtamanho
 * @property float|null $valor
 * @property int $codempresa
 *
 * @package App\Models
 */
class ValorTamanhoProd extends Model
{
	protected $table = 'valor_tamanho_prod';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'valor' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codproduto',
		'codtamanho',
		'valor',
		'codempresa'
	];
}
