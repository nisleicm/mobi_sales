<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Atualizadb
 * 
 * @property string|null $versao
 * @property Carbon|null $data
 * @property string|null $hora
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class Atualizadb extends Model
{
	protected $table = 'atualizadb';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'versao',
		'data',
		'hora',
		'codempresa'
	];
}
