<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000027
 * 
 * @property string $codigo
 * @property string|null $codproduto
 * @property float|null $qtde
 * @property string|null $produto
 * @property float|null $valor
 * @property float|null $custo
 * @property int|null $codigo_produto
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000027 extends Model
{
	protected $table = 'c000027';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'qtde' => 'float',
		'valor' => 'float',
		'custo' => 'float',
		'codigo_produto' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codproduto',
		'qtde',
		'produto',
		'valor',
		'custo',
		'codigo_produto',
		'codempresa'
	];
}
