<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProdutosGrupoMargem
 * 
 * @property int $grupomvaid
 * @property string $grupo
 * @property string|null $descricao
 * @property int $codempresa
 * 
 * @property Collection|ProdutosMargemAgregada[] $produtos_margem_agregadas
 *
 * @package App\Models
 */
class ProdutosGrupoMargem extends Model
{
	protected $table = 'produtos_grupo_margem';
	protected $primaryKey = 'grupomvaid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'grupomvaid' => 'int',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'grupo',
		'descricao',
		'codempresa'
	];

	public function produtos_margem_agregadas()
	{
		return $this->hasMany(ProdutosMargemAgregada::class, 'grupomvaid');
	}
}
