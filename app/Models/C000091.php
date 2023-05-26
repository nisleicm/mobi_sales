<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000091
 * 
 * @property string $codigo
 * @property string|null $coddespesa
 * @property float|null $percentual
 * @property float|null $valor
 * @property string|null $lote
 * @property string|null $ordem_producao
 * @property string|null $ano
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000091 extends Model
{
	protected $table = 'c000091';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'percentual' => 'float',
		'valor' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'coddespesa',
		'percentual',
		'valor',
		'lote',
		'ordem_producao',
		'ano'
	];
}
