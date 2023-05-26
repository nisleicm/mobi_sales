<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cl00005
 * 
 * @property string|null $codproduto
 * @property int|null $qtde
 * @property string|null $produto
 * @property float|null $valor
 * @property string|null $tamanho
 * @property string|null $texto
 * @property string|null $grade
 * @property string|null $codbarra
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class Cl00005 extends Model
{
	protected $table = 'cl00005';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'qtde' => 'int',
		'valor' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codproduto',
		'qtde',
		'produto',
		'valor',
		'tamanho',
		'texto',
		'grade',
		'codbarra',
		'codempresa'
	];
}
