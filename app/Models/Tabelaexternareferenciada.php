<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tabelaexternareferenciada
 * 
 * @property int $id
 * @property string $tipo
 * @property int $versao
 * @property string|null $listaufs
 *
 * @package App\Models
 */
class Tabelaexternareferenciada extends Model
{
	protected $table = 'tabelaexternareferenciada';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'versao' => 'int'
	];

	protected $fillable = [
		'tipo',
		'versao',
		'listaufs'
	];
}
