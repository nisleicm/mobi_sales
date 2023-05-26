<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProdutoFidelidade
 * 
 * @property int $codigo
 * @property string $codproduto
 * @property int $codfidelidade
 * @property float|null $porc_desconto
 * @property int $codempresa
 *
 * @package App\Models
 */
class ProdutoFidelidade extends Model
{
	protected $table = 'produto_fidelidade';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'codfidelidade' => 'int',
		'porc_desconto' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'codproduto',
		'codfidelidade',
		'porc_desconto',
		'codempresa'
	];
}
