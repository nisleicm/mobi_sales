<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TaxaEntrega
 * 
 * @property int $id
 * @property string|null $descricao
 * @property float|null $valor
 * @property int $codempresa
 *
 * @package App\Models
 */
class TaxaEntrega extends Model
{
	protected $table = 'taxa_entrega';
	public $timestamps = false;

	protected $casts = [
		'valor' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'descricao',
		'valor'
	];
}
