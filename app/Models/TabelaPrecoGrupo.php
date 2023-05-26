<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TabelaPrecoGrupo
 * 
 * @property int $id
 * @property string|null $cod_grupo
 * @property float|null $quantidade_inicial
 * @property float|null $quantidade_final
 * @property string|null $tipo_desconto
 * @property float|null $indice
 * @property string|null $tipo_tabela
 * @property int $codempresa
 *
 * @package App\Models
 */
class TabelaPrecoGrupo extends Model
{
	protected $table = 'tabela_preco_grupo';
	public $timestamps = false;

	protected $casts = [
		'quantidade_inicial' => 'float',
		'quantidade_final' => 'float',
		'indice' => 'float',
		'codempresa' => 'int'
	];

	protected $fillable = [
		'cod_grupo',
		'quantidade_inicial',
		'quantidade_final',
		'tipo_desconto',
		'indice',
		'tipo_tabela',
		'codempresa'
	];
}
