<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProdutosMargemAgregada
 * 
 * @property int $margemmvaid
 * @property int $grupomvaid
 * @property string $produto
 * @property string|null $descricao
 * @property float $mva_industria
 * @property float $mva_distribuidor
 * @property int $codempresa
 * 
 * @property ProdutosGrupoMargem $produtos_grupo_margem
 *
 * @package App\Models
 */
class ProdutosMargemAgregada extends Model
{
	protected $table = 'produtos_margem_agregada';
	protected $primaryKey = 'margemmvaid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'margemmvaid' => 'int',
		'grupomvaid' => 'int',
		'mva_industria' => 'float',
		'mva_distribuidor' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'grupomvaid',
		'produto',
		'descricao',
		'mva_industria',
		'mva_distribuidor',
		'codempresa'
	];

	public function produtos_grupo_margem()
	{
		return $this->belongsTo(ProdutosGrupoMargem::class, 'grupomvaid');
	}
}
