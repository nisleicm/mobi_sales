<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000078
 * 
 * @property string $rentabilidade
 * @property string|null $codproduto
 * @property string|null $produto
 * @property float|null $rendimento
 * @property float|null $quantidade
 * @property float|null $valor
 * @property string|null $codigo
 * @property Carbon|null $datamov
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000078 extends Model
{
	protected $table = 'c000078';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'rendimento' => 'float',
		'quantidade' => 'float',
		'valor' => 'float',
		'datamov' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'rentabilidade',
		'codproduto',
		'produto',
		'rendimento',
		'quantidade',
		'valor',
		'codigo',
		'datamov',
		'codempresa'
	];
}
