<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000130
 * 
 * @property string $codigo
 * @property string|null $codproduto
 * @property string|null $lote
 * @property string|null $codorcamento
 * @property float|null $qtde
 * @property string|null $codnota
 * @property string|null $codvenda
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000130 extends Model
{
	protected $table = 'c000130';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'qtde' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codproduto',
		'lote',
		'codorcamento',
		'qtde',
		'codnota',
		'codvenda',
		'codempresa'
	];
}
