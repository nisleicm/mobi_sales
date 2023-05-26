<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TabelaDifal
 * 
 * @property int $id
 * @property string $uf_origem
 * @property string $uf_destino
 * @property float $porcentagem
 * @property Carbon|null $datamov
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class TabelaDifal extends Model
{
	protected $table = 'tabela_difal';
	public $timestamps = false;

	protected $casts = [
		'porcentagem' => 'float',
		'datamov' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'uf_origem',
		'uf_destino',
		'porcentagem',
		'datamov',
		'codempresa'
	];
}
