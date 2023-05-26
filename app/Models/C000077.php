<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000077
 * 
 * @property string $codigo
 * @property string|null $codproduto
 * @property string|null $produto
 * @property string|null $unidade
 * @property float|null $embalagem
 * @property float|null $perda
 * @property Carbon|null $datamov
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000077 extends Model
{
	protected $table = 'c000077';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'embalagem' => 'float',
		'perda' => 'float',
		'datamov' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codproduto',
		'produto',
		'unidade',
		'embalagem',
		'perda',
		'datamov',
		'codempresa'
	];
}
