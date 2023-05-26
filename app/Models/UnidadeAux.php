<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UnidadeAux
 * 
 * @property int $codigo
 * @property string|null $codproduto
 * @property string|null $unidade
 * @property float|null $estoque
 * @property int $codempresa
 *
 * @package App\Models
 */
class UnidadeAux extends Model
{
	protected $table = 'unidade_aux';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'estoque' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codproduto',
		'unidade',
		'estoque',
		'codempresa'
	];
}
