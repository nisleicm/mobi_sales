<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FarmaciaPrincipioativo
 * 
 * @property string $codbarra
 * @property string|null $codigo
 * @property string $dcb
 * @property string|null $insumo
 * @property string|null $lista
 * @property string|null $codproduto
 * @property int|null $codempresa
 *
 * @package App\Models
 */
class FarmaciaPrincipioativo extends Model
{
	protected $table = 'farmacia_principioativo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codbarra',
		'codigo',
		'dcb',
		'insumo',
		'lista',
		'codproduto',
		'codempresa'
	];
}
