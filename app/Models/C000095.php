<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000095
 * 
 * @property string|null $memorando
 * @property string $notafiscal
 * @property Carbon|null $nf_data
 * @property string|null $nf_modelo
 * @property string|null $nf_serie
 * @property float|null $nf_quantidade
 * @property string|null $nf_unidade
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000095 extends Model
{
	protected $table = 'c000095';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'nf_data' => 'datetime',
		'nf_quantidade' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'memorando',
		'nf_data',
		'nf_modelo',
		'nf_serie',
		'nf_quantidade',
		'nf_unidade'
	];
}
