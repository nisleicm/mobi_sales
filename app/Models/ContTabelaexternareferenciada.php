<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContTabelaexternareferenciada
 * 
 * @property int $id
 * @property string $tipo
 * @property int $versao
 *
 * @package App\Models
 */
class ContTabelaexternareferenciada extends Model
{
	protected $table = 'cont_tabelaexternareferenciada';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'versao' => 'int'
	];

	protected $fillable = [
		'id',
		'tipo',
		'versao'
	];
}
