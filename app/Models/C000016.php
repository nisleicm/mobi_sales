<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class C000016
 * 
 * @property string $id
 * @property string|null $codcondpgto
 * @property int|null $numero
 * @property int|null $dias
 * @property float|null $percentual
 * @property float|null $juros
 * @property string|null $tipo
 * @property string|null $condpgto
 * @property int|null $tipoent
 * @property int|null $tipocred
 * @property string|null $formapgto
 * @property Carbon|null $datamov
 * @property int $codempresa
 *
 * @package App\Models
 */
class C000016 extends Model
{
	protected $table = 'c000016';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'numero' => 'int',
		'dias' => 'int',
		'percentual' => 'float',
		'juros' => 'float',
		'tipoent' => 'int',
		'tipocred' => 'int',
		'datamov' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codcondpgto',
		'numero',
		'dias',
		'percentual',
		'juros',
		'tipo',
		'condpgto',
		'tipoent',
		'tipocred',
		'formapgto',
		'datamov',
		'codempresa'
	];
}
