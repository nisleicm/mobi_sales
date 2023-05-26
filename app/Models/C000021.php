<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class C000021
 * 
 * @property string $codigo
 * @property string|null $codproduto
 * @property string|null $numeracao
 * @property string|null $codbarra
 * @property float|null $estoque
 * @property string|null $cor
 * @property string|null $modelo
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000021 extends Model
{
	protected $table = 'c000021';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'estoque' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codproduto',
		'numeracao',
		'codbarra',
		'estoque',
		'cor',
		'modelo',
		'codempresa'
	];
}
