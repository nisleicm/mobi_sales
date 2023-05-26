<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MtComplemento
 * 
 * @property int $codigo
 * @property string|null $descricao
 * @property int|null $ativa
 * @property int $codempresa
 *
 * @package App\Models
 */
class MtComplemento extends Model
{
	protected $table = 'mt_complemento';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'ativa' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'descricao',
		'ativa'
	];
}
