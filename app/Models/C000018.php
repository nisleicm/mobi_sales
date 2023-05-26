<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000018
 * 
 * @property string $codigo
 * @property string|null $codgrupo
 * @property string|null $subgrupo
 * @property string|null $altera_preco_abcfarma
 * @property float|null $comissao
 * @property float|null $desconto
 * @property Carbon|null $datamov
 * @property int $codempresa
 * @property int|null $codigo_outrosistema
 * @property int $id
 *
 * @package App\Models
 */
class C000018 extends Model
{
	protected $table = 'c000018';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'comissao' => 'float',
		'desconto' => 'float',
		'datamov' => 'datetime',
		'codempresa' => 'int',
		'codigo_outrosistema' => 'int',
		'id' => 'int'
	];

	protected $fillable = [
		'codgrupo',
		'subgrupo',
		'altera_preco_abcfarma',
		'comissao',
		'desconto',
		'datamov',
		'codempresa',
		'codigo_outrosistema',
		'id'
	];
}
