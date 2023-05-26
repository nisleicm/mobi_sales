<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TabelaCest
 * 
 * @property string $cest
 * @property string|null $ncm
 * @property string|null $descricao
 * @property Carbon|null $datamov
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class TabelaCest extends Model
{
	protected $table = 'tabela_cest';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'datamov' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'cest',
		'ncm',
		'descricao',
		'datamov',
		'codempresa'
	];
}
