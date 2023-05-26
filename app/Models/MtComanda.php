<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MtComanda
 * 
 * @property int|null $codigo
 * @property string|null $descricao
 * @property int|null $ativa
 * @property int $codempresa
 *
 * @package App\Models
 */
class MtComanda extends Model
{
	protected $table = 'mt_comanda';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'ativa' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codigo',
		'descricao',
		'ativa',
		'codempresa'
	];
}
