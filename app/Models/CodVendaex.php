<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CodVendaex
 * 
 * @property int $codigo
 * @property string $terminal
 * @property string|null $descterminal
 * @property string|null $seq_venda
 * @property string|null $seq_orc
 *
 * @package App\Models
 */
class CodVendaex extends Model
{
	protected $table = 'cod_vendaex';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int'
	];

	protected $fillable = [
		'codigo',
		'terminal',
		'descterminal',
		'seq_venda',
		'seq_orc'
	];
}
