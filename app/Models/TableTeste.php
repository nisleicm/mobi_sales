<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TableTeste
 * 
 * @property string|null $ncm
 * @property string|null $descricao
 * @property string|null $cest
 * @property int|null $invalido
 *
 * @package App\Models
 */
class TableTeste extends Model
{
	protected $table = 'table_teste';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'invalido' => 'int'
	];

	protected $fillable = [
		'ncm',
		'descricao',
		'cest',
		'invalido'
	];
}
